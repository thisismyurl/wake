#!/usr/bin/env bash
# bump-version.sh — set the next Colophon theme version number (Toronto time).
#
# Version format:  1.Yjjj[.hhmm]
#   1     — major (fixed for the Colophon line)
#   Y     — last digit of the current year in Toronto/Eastern time  (2026 → 6)
#   jjj   — Julian day of year, zero-padded to 3 digits             (Jan 1 → 001)
#   .hhmm — 24-hour hour+minute suffix, appended only when --force
#           is passed or when the base version already exists today
#
# Examples (Toronto time):
#   2026-01-01          → 1.6001
#   2026-05-28          → 1.6148
#   2026-05-28 14:30    → 1.6148.1430  (second release that day, or --force)
#   2027-01-01          → 1.7001
#
# Usage (run from the theme's root directory):
#   bash bump-version.sh              # auto-calculate; warn if base already today's
#   bash bump-version.sh --force      # always append .hhmm
#   bash bump-version.sh --print      # print version only, write nothing
#   bash bump-version.sh --dry-run    # show what would change, write nothing
#
# After running, commit with:
#   git add style.css inc/bootstrap.php colophon.json
#   git commit -m "chore: bump version to $(bash bump-version.sh --print)"

set -euo pipefail

FORCE_HHMM=false
PRINT_ONLY=false
DRY_RUN=false

for arg in "$@"; do
  case "$arg" in
    --force)   FORCE_HHMM=true ;;
    --print)   PRINT_ONLY=true ;;
    --dry-run) DRY_RUN=true ;;
  esac
done

# ----------------------------------------------------------
# Calculate version in Toronto / Eastern time (respects DST)
# ----------------------------------------------------------
TORONTO=$(TZ="America/Toronto" date '+%Y %j %H %M')
read -r YEAR JULIAN HOUR MINUTE <<< "$TORONTO"

YEAR_DIGIT="${YEAR: -1}"
JULIAN_PAD=$(printf '%03d' "$((10#$JULIAN))")
BASE_VERSION="1.${YEAR_DIGIT}${JULIAN_PAD}"

# Check if style.css already carries today's base version
EXISTING_VERSION=""
if [ -f "style.css" ]; then
  EXISTING_VERSION=$(grep '^Version:' style.css | sed 's/Version:[[:space:]]*//' | tr -d '[:space:]')
fi

if $FORCE_HHMM || [[ "$EXISTING_VERSION" == "$BASE_VERSION"* && "$EXISTING_VERSION" != "" ]]; then
  VERSION="${BASE_VERSION}.${HOUR}${MINUTE}"
  if ! $FORCE_HHMM; then
    echo "  Note: $BASE_VERSION already in style.css — appending .hhmm to disambiguate."
  fi
else
  VERSION="$BASE_VERSION"
fi

if $PRINT_ONLY; then
  echo "$VERSION"
  exit 0
fi

echo "Version: $VERSION"
echo ""

# ----------------------------------------------------------
# Apply version to theme files
# ----------------------------------------------------------
update_file() {
  local file="$1" pattern="$2" replacement="$3"
  if [ -f "$file" ]; then
    if $DRY_RUN; then
      echo "  [dry-run] $file — would apply: $replacement"
    else
      sed -i "s/$pattern/$replacement/" "$file"
      echo "  updated: $file"
    fi
  fi
}

# style.css  — WordPress theme header (human-readable spacing preserved)
update_file "style.css" \
  "^Version:.*" \
  "Version:            $VERSION"

# inc/bootstrap.php — runtime VERSION constant (cache-bust for enqueued assets)
update_file "inc/bootstrap.php" \
  "const VERSION = '[^']*';" \
  "const VERSION = '$VERSION';"

# colophon.json — CLI manifest; colophon sync reads this and propagates to both files above
update_file "colophon.json" \
  "" \
  "" # handled separately with jq below

if [ -f "colophon.json" ] && ! $DRY_RUN; then
  jq --arg v "$VERSION" '.version = $v' colophon.json > colophon.json.tmp \
    && mv colophon.json.tmp colophon.json
  echo "  updated: colophon.json"
elif [ -f "colophon.json" ] && $DRY_RUN; then
  echo "  [dry-run] colophon.json — would set .version = \"$VERSION\""
fi

echo ""
if $DRY_RUN; then
  echo "Dry run complete. No files written."
else
  echo "Done. Next:"
  echo "  git add style.css inc/bootstrap.php colophon.json"
  echo "  git commit -m \"chore: bump version to $VERSION\""
fi
