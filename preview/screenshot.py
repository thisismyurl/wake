#!/usr/bin/env python3
"""
screenshot.py — Playwright screenshot capture for the Wake theme preview.

Usage:
    cd /path/to/wake/preview
    python3 screenshot.py

Requirements:
    playwright install chromium    (one-time setup)
"""

import asyncio
import shutil
from pathlib import Path

from playwright.async_api import async_playwright

PREVIEW_DIR  = Path(__file__).parent.resolve()
THEME_DIR    = PREVIEW_DIR.parent
SCREENSHOTS  = PREVIEW_DIR / "screenshots"
SCREENSHOTS.mkdir(exist_ok=True)

PAGES = [
    # WP.org submission — exactly 1200×900, no full-page
    ("01-front-page.html",         1200, 900,  "01-front-page-wporg.png",   False),
    # Desktop full-page shots
    ("02-services.html",           1200, 900,  "02-services.png",           True),
    ("03-archive.html",            1280, 900,  "03-archive.png",            True),
    ("04-trust.html",              1200, 900,  "04-trust.png",              True),
    ("00-elements.html",           1200, 900,  "00-elements.png",           True),
    # Mobile viewports
    ("05-front-mobile.html",        375, 812,  "05-front-mobile-375.png",   True),
    ("06-slip-board-mobile.html",   390, 844,  "06-slip-board-mobile-390.png", True),
]

WPORG_FILE = "01-front-page-wporg.png"


async def capture(browser, html_file, width, height, output_name, full_page):
    page_path = PREVIEW_DIR / html_file
    output    = SCREENSHOTS / output_name

    dpr = 1 if output_name == WPORG_FILE else 2

    context = await browser.new_context(
        viewport={"width": width, "height": height},
        device_scale_factor=dpr,
    )
    page = await context.new_page()

    await page.goto(f"file://{page_path}", wait_until="domcontentloaded")
    await page.evaluate("() => document.fonts.ready")
    await page.wait_for_timeout(600)

    await page.screenshot(
        path=str(output),
        full_page=full_page,
        clip=None if full_page else {"x": 0, "y": 0, "width": width, "height": height},
    )

    await context.close()
    size_kb = output.stat().st_size // 1024
    print(f"  [{width}×{height}{'f' if full_page else 'c'}] {output_name}  ({size_kb} KB)")


async def main():
    print("Wake theme — screenshot capture")
    print(f"  Output: {SCREENSHOTS}")
    print()

    async with async_playwright() as p:
        browser = await p.chromium.launch()

        for html_file, w, h, name, fp in PAGES:
            await capture(browser, html_file, w, h, name, fp)

        await browser.close()

    wporg_src = SCREENSHOTS / WPORG_FILE
    wporg_dst = THEME_DIR / "screenshot.png"
    if wporg_src.exists():
        shutil.copy2(wporg_src, wporg_dst)
        size_kb = wporg_dst.stat().st_size // 1024
        print()
        print(f"WP.org screenshot: {wporg_dst}  ({size_kb} KB)")

    print()
    print(f"Done. {len(PAGES)} screenshots in {SCREENSHOTS}")


if __name__ == "__main__":
    asyncio.run(main())
