<?php
// Shared "What you get" cards and closing CTA for service pages.
// Expects $sd_name (string) and $sd_bullets (array of 3 strings).
// Icons and short descriptions are looked up below by service name.
$sd_icons = [
    'workflow' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="9" width="16" height="12" rx="3"/><rect x="42" y="9" width="16" height="12" rx="3"/><rect x="24" y="43" width="16" height="12" rx="3" fill="#8ee8f7" fill-opacity="0.45"/><path d="M14 21V32H50V21M32 32V43"/></svg>',
    'scale' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="10" y="38" width="10" height="16" rx="2"/><rect x="27" y="28" width="10" height="26" rx="2"/><rect x="44" y="16" width="10" height="38" rx="2" fill="#8ee8f7" fill-opacity="0.45"/><path d="M8 24L24 12M16 10H25V19"/></svg>',
    'code' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="32" cy="32" r="24" fill="#8ee8f7" fill-opacity="0.45" stroke="none"/><path d="M22 20L10 32L22 44M42 20L54 32L42 44M36 14L28 50"/></svg>',
    'clipcheck' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="12" y="10" width="40" height="48" rx="5"/><rect x="23" y="5" width="18" height="10" rx="3" fill="#8ee8f7" fill-opacity="0.45"/><path d="M22 36L29 43L42 28"/></svg>',
    'gauge' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 46A24 24 0 0 1 56 46" /><path d="M32 46L43 27"/><circle cx="32" cy="46" r="4" fill="#8ee8f7" fill-opacity="0.45"/><path d="M13 34L16 36M32 22V26M51 34L48 36"/></svg>',
    'bug' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><ellipse cx="32" cy="37" rx="11" ry="15" fill="#8ee8f7" fill-opacity="0.45"/><circle cx="32" cy="20" r="6"/><path d="M28 15L23 8M36 15L41 8M21 30L11 26M21 38H9M23 47L13 53M43 30L53 26M43 38H55M41 47L51 53M32 25V52"/></svg>',
    'shieldsearch' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M26 7L43 13V27C43 37 36 44 26 49C16 44 9 37 9 27V13Z" fill="#8ee8f7" fill-opacity="0.45"/><circle cx="41" cy="41" r="10" fill="#0a6ea8"/><path d="M48 48L57 57"/></svg>',
    'network' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="32" cy="32" r="8" fill="#8ee8f7" fill-opacity="0.45"/><circle cx="10" cy="12" r="4"/><circle cx="54" cy="12" r="4"/><circle cx="10" cy="52" r="4"/><circle cx="54" cy="52" r="4"/><path d="M13 15L26 27M51 15L38 27M13 49L26 37M51 49L38 37"/></svg>',
    'eye' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 32C13 18 23 13 32 13C41 13 51 18 59 32C51 46 41 51 32 51C23 51 13 46 5 32Z"/><circle cx="32" cy="32" r="9" fill="#8ee8f7" fill-opacity="0.45"/><circle cx="32" cy="32" r="3.5" fill="#ffffff"/></svg>',
    'cloudup' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 47H45A10 10 0 0 0 46 27A15 15 0 0 0 19 25A11 11 0 0 0 18 47Z" fill="#8ee8f7" fill-opacity="0.45"/><path d="M32 42V28M25 34L32 27L39 34"/></svg>',
    'lockkey' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="12" y="29" width="30" height="26" rx="5" fill="#8ee8f7" fill-opacity="0.45"/><path d="M18 29V21A9 9 0 0 1 36 21V29"/><circle cx="27" cy="41" r="3"/><path d="M27 44V49M46 46H58M54 46V52M49 46V50"/></svg>',
    'doccheck' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 6H36L48 18V58H14Z"/><path d="M36 6V18H48"/><path d="M21 26H35M21 33H33"/><circle cx="38" cy="46" r="10" fill="#8ee8f7" fill-opacity="0.45"/><path d="M33 46L37 50L44 42"/></svg>',
    'phonebolt' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="17" y="5" width="30" height="54" rx="6"/><path d="M28 11H36"/><circle cx="32" cy="53" r="2"/><path d="M35 18L26 34H33L29 46L40 28H33Z" fill="#8ee8f7" fill-opacity="0.45"/></svg>',
    'seo' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="28" cy="28" r="17" fill="#8ee8f7" fill-opacity="0.45"/><path d="M41 41L56 56M20 34V27M28 34V19M36 34V24"/></svg>',
    'window' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="6" y="10" width="52" height="44" rx="6"/><path d="M6 22H58"/><circle cx="13" cy="16" r="1.6"/><circle cx="19" cy="16" r="1.6"/><path d="M14 31H34M14 39H46M14 47H26" /><rect x="40" y="27" width="12" height="8" rx="2" fill="#8ee8f7" fill-opacity="0.45"/></svg>',
    'star' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M32 7L39 23L56 24.5L43 36L47 53L32 44L17 53L21 36L8 24.5L25 23Z" fill="#8ee8f7" fill-opacity="0.45"/></svg>',
    'cursor' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 10V48L26 39L33 54L40 51L33 36L46 34Z" fill="#8ee8f7" fill-opacity="0.45"/><path d="M44 12A10 10 0 0 1 54 22M46 4A18 18 0 0 1 60 18"/></svg>',
    'wireframe' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="7" y="8" width="50" height="48" rx="5"/><path d="M7 20H57"/><rect x="13" y="26" width="15" height="24" rx="2" fill="#8ee8f7" fill-opacity="0.45"/><path d="M34 28H51M34 36H51M34 44H44"/></svg>',
    'devices' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="26" y="9" width="32" height="44" rx="4" fill="#8ee8f7" fill-opacity="0.45"/><rect x="6" y="22" width="18" height="34" rx="4" fill="#0a6ea8"/><path d="M13 51H17M38 47H46"/></svg>',
    'touch' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="12" y="5" width="28" height="50" rx="5"/><path d="M21 11H31"/><circle cx="46" cy="41" r="6" fill="#8ee8f7" fill-opacity="0.45"/><circle cx="46" cy="41" r="13" stroke-opacity="0.6"/></svg>',
    'headset' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M11 38V31A21 21 0 0 1 53 31V38"/><rect x="7" y="35" width="9" height="16" rx="3" fill="#8ee8f7" fill-opacity="0.45"/><rect x="48" y="35" width="9" height="16" rx="3" fill="#8ee8f7" fill-opacity="0.45"/><path d="M52 51V54Q52 58 42 58H36"/></svg>',
    'mail' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="14" width="54" height="38" rx="5" fill="#8ee8f7" fill-opacity="0.45"/><path d="M7 18L32 37L57 18"/></svg>',
    'server' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="9" y="7" width="46" height="14" rx="3"/><rect x="9" y="25" width="46" height="14" rx="3" fill="#8ee8f7" fill-opacity="0.45"/><rect x="9" y="43" width="46" height="14" rx="3"/><circle cx="17" cy="14" r="1.8" fill="#ffffff"/><circle cx="17" cy="32" r="1.8" fill="#ffffff"/><circle cx="17" cy="50" r="1.8" fill="#ffffff"/><path d="M27 14H46M27 32H46M27 50H46"/></svg>',
    'pulse' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="32" cy="32" r="26" fill="#8ee8f7" fill-opacity="0.45" stroke="none"/><path d="M5 34H18L24 17L33 49L39 27L43 34H59"/></svg>',
    'clock' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="32" cy="32" r="24" fill="#8ee8f7" fill-opacity="0.45"/><path d="M32 16V32L43 39"/><path d="M32 8V11M56 32H53M32 56V53M8 32H11"/></svg>',
    'monitor' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="5" y="9" width="54" height="36" rx="4"/><path d="M22 56H42M32 45V56"/><path d="M24 17V36L30 31L34 40L38 38L34 29L42 28Z" fill="#8ee8f7" fill-opacity="0.45"/></svg>',
    'wrench' => '<svg width="76" height="76" viewBox="0 0 64 64" fill="none" stroke="#ffffff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M42 7A13 13 0 0 0 31 25L9 47A5.5 5.5 0 0 0 17 55L39 33A13 13 0 0 0 57 22L48 31L40 29L38 21L47 12Z" fill="#8ee8f7" fill-opacity="0.45"/></svg>'
];
$sd_content = [
    'Software Development' => [['workflow', 'Software shaped around how your team already works, instead of a one-size-fits-all package.'], ['scale', 'A solid foundation that keeps up as your users, data and needs grow.'], ['code', 'Clear, well-organised code that is easy to read, maintain and extend.']],
    'Software Testing' => [['clipcheck', 'Hands-on checks backed by automated test runs, so more of your software gets covered.'], ['gauge', 'See how your software holds up under heavy use before it launches.'], ['bug', 'Issues are followed through to a fix, not left sitting in a report.']],
    'Cybersecurity' => [['shieldsearch', 'Find the gaps in your systems before someone else does.'], ['network', 'Protection for your network and the devices that connect to it.'], ['eye', 'Round-the-clock watch for threats, with a response when one appears.']],
    'Data Protection' => [['cloudup', 'Backups that run on their own, and a plan to recover when something goes wrong.'], ['lockkey', 'Your data stays protected whether it is stored or on the move.'], ['doccheck', 'Help meeting the data rules that apply to your business.']],
    'Website Development' => [['phonebolt', 'Designed for phones first and tuned to load quickly on any device.'], ['seo', 'A search-friendly structure from day one, so people can find you.'], ['window', 'Lean code without unnecessary extras, easier to maintain and faster to run.']],
    'Graphic Design, UI/UX' => [['star', 'A look and feel that people recognise and remember.'], ['cursor', 'Design shaped by how people actually click, scroll and decide.'], ['wireframe', 'Layouts and prototypes you can review before development starts.']],
    'App Design and Development' => [['devices', 'Apps for iOS and Android, built to feel native and move fast.'], ['touch', 'Screens and controls made for one-handed, touch-first use.'], ['headset', 'Help stays available after your app reaches the app store.']],
    'Email and Hosting' => [['mail', 'Business email that carries your own domain name.'], ['server', 'Hosting sized to what you actually need, shared or dedicated.'], ['pulse', 'Hosting built for real uptime, so your site stays available.']],
    'Technical Support' => [['clock', 'Round-the-clock support that picks up when you need it.'], ['monitor', 'Fixes done remotely where possible, and on site when needed.'], ['wrench', 'Small issues caught early, before they turn into bigger problems.']]
];
$sd_extra = isset($sd_content[$sd_name]) ? $sd_content[$sd_name] : [];
?>
<style>
    .sd-title { min-height: 2.6em; line-height: 1.3; }
    @media (max-width: 767.98px) { .sd-title { min-height: 0; } }
</style>
<div class="py-4 py-lg-5" style="background:#f4f9fc;padding-top:4.5rem;">
    <div class="container">
        <div class="mx-0 mx-lg-5" style="padding-left:12px;padding-right:12px;">
            <div class="text-uppercase font-manrope font-700 light-black">What you get</div>
            <div class="font-manrope font-700 font-size-2xl mt-2 lh-1 light-black"><?php echo htmlspecialchars($sd_name); ?></div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 mx-0 mx-lg-5">
            <?php foreach ($sd_bullets as $i => $sd_bullet) {
                $sd_item = isset($sd_extra[$i]) ? $sd_extra[$i] : null; ?>
            <div class="col">
                <div class="bg-official-card h-100 p-4 d-flex flex-column">
                    <?php if ($sd_item) { ?>
                    <div class="rounded-3 d-flex align-items-center justify-content-center mb-4" style="background:rgba(255,255,255,0.14);height:120px;">
                        <?php echo $sd_icons[$sd_item[0]]; ?>
                    </div>
                    <?php } ?>
                    <h3 class="sd-title font-manrope font-700 text-white fs-5 mb-2"><?php echo htmlspecialchars($sd_bullet); ?></h3>
                    <?php if ($sd_item) { ?>
                    <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter mb-0"><?php echo htmlspecialchars($sd_item[1]); ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="py-5 text-white" style="background: linear-gradient(90deg, #076baa, #0099bd);">
    <div class="container">
        <div class="mx-0 mx-lg-5 d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-4" style="padding-left:12px;padding-right:12px;">
            <div>
                <div class="font-manrope font-700 font-size-2xl lh-1">So, where does it hurt?</div>
                <p class="font-16px mt-3 mb-0 opacity-0.8">Slow site, security worry, an app that's overdue &mdash; tell us what's actually going on. We'll tell you what to fix first.</p>
            </div>
            <a href="contact.php" class="btn bg-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600" style="color:#076baa;">Talk to Connectia &rarr;</a>
        </div>
    </div>
</div>
