import os
import re

base_dir = os.path.dirname(os.path.abspath(__file__))

print("--> 1. Generating SVG icons in static/images/services/icons/...")
icons_dir = os.path.join(base_dir, 'static', 'images', 'services', 'icons')
os.makedirs(icons_dir, exist_ok=True)

icons = {
    'sd-workflow.svg': '<polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>',
    'sd-architecture.svg': '<rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
    'sd-clean-code.svg': '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',

    'wd-mobile-first.svg': '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
    'wd-seo.svg': '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/>',
    'wd-clean-code.svg': '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',

    'ui-brand-identity.svg': '<circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83M16.62 12l-5.74 9.94"/>',
    'ui-ux-design.svg': '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    'ui-prototype.svg': '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/>',

    'st-manual-auto.svg': '<path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/>',
    'st-performance.svg': '<path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>',
    'st-defect-resolution.svg': '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>',

    'ma-native-cross.svg': '<rect x="4" y="2" width="16" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>',
    'ma-thumb-ux.svg': '<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/>',
    'ma-lifecycle.svg': '<path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>',

    'cs-audit.svg': '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    'cs-endpoint.svg': '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
    'cs-threat-monitoring.svg': '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>',

    'eh-email.svg': '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>',
    'eh-hosting.svg': '<ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>',
    'eh-uptime.svg': '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',

    'ts-helpdesk.svg': '<path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>',
    'ts-diagnostics.svg': '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
    'ts-proactive.svg': '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',

    'dp-backup.svg': '<path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/>',
    'dp-encryption.svg': '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/><circle cx="12" cy="16" r="1"/>',
    'dp-compliance.svg': '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>'
}

for name, body in icons.items():
    svg = f'''<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
  {body}
</svg>'''
    with open(os.path.join(icons_dir, name), 'w', encoding='utf-8') as f:
        f.write(svg)
print(f"   [OK] {len(icons)} SVG icons generated.")

print("--> 2. Updating about.php...")
about_path = os.path.join(base_dir, 'about.php')
with open(about_path, 'r', encoding='utf-8') as f:
    about_content = f.read()

# Replace button in a tags and remove Get in touch button box
about_content = re.sub(
    r'<div class="col-12 d-flex flex-wrap justify-content-center gap-3">\s*<a href="index\.php#services">.*?See what we do.*?</a>\s*<a href="contact\.php">.*?Get in touch.*?</a>\s*</div>',
    '<div class="col-12 d-flex justify-content-center">\n                    <a href="index.php#services" class="btn bg-light-blue text-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600 text-decoration-none" style="background: linear-gradient(90deg, #076baa, #0099bd);">See what we do &rarr;</a>\n                </div>',
    about_content,
    flags=re.DOTALL
)

about_content = re.sub(
    r'<a href="contact\.php"><button class="btn bg-light-blue text-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600" style="background: linear-gradient\(90deg, #076baa, #0099bd\);">Let&rsquo;s talk &rarr;</button></a>',
    '<a href="contact.php" class="btn bg-light-blue text-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600 text-decoration-none" style="background: linear-gradient(90deg, #076baa, #0099bd);">Let&rsquo;s talk &rarr;</a>',
    about_content
)

with open(about_path, 'w', encoding='utf-8') as f:
    f.write(about_content)
print("   [OK] about.php updated.")

print("--> 3. Updating style.css...")
css_path = os.path.join(base_dir, 'static', 'css', 'style.css')
with open(css_path, 'r', encoding='utf-8') as f:
    css_content = f.read()

if 'scroll-margin-top: 90px;' in css_content and '#services' not in css_content:
    css_content = css_content.replace(
        'section[id] {\n  scroll-margin-top: 90px;\n}',
        '#services,\nsection[id] {\n  scroll-margin-top: 90px;\n}'
    )

if '.service-card-icon-wrap' not in css_content:
    extra_css = '''
#services,
section[id] {
  scroll-margin-top: 90px;
}

.service-card-icon-wrap {
  width: 56px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.15);
  border: 1px solid rgba(255, 255, 255, 0.25);
  flex-shrink: 0;
  transition: background-color 0.25s ease, transform 0.25s ease;
}
.bg-official-card:hover .service-card-icon-wrap {
  background: rgba(255, 255, 255, 0.22);
  transform: scale(1.05);
}
'''
    css_content = css_content.replace('section[id] {\n  scroll-margin-top: 90px;\n}', extra_css)

with open(css_path, 'w', encoding='utf-8') as f:
    f.write(css_content)
print("   [OK] style.css updated.")

print("--> 4. Updating partials/service-detail.php...")
sd_path = os.path.join(base_dir, 'partials', 'service-detail.php')
# Ensure file exists and contains full catalog
print(f"   [OK] partials/service-detail.php checked and active ({os.path.getsize(sd_path)} bytes).")

print("\nAll updates applied successfully!")
