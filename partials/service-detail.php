<?php
// Shared "What you get" cards and closing CTA for service pages.
// Expects $sd_name (string) and $sd_bullets (array of strings).
?>
<div class="py-4 py-lg-5" style="background:#f4f9fc;">
    <div class="container">
        <div class="mx-0 mx-lg-5">
            <div class="text-uppercase font-manrope font-700 light-black">What you get</div>
            <div class="font-manrope font-700 font-size-2xl mt-2 lh-1 light-black"><?php echo htmlspecialchars($sd_name); ?></div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1 mx-0 mx-lg-5">
            <?php foreach ($sd_bullets as $i => $sd_bullet) { ?>
            <div class="col">
                <div class="bg-official-card h-100 p-4">
                    <div class="font-manrope font-700 fs-2 text-white" style="opacity:0.6;">0<?php echo $i + 1; ?></div>
                    <p class="font-roboto-slab lh-lg font-15px font-400 text-lighter mb-0 mt-2"><?php echo htmlspecialchars($sd_bullet); ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="py-5 text-white" style="background: linear-gradient(90deg, #076baa, #0099bd);">
    <div class="container">
        <div class="mx-0 mx-lg-5 d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-4">
            <div>
                <div class="font-manrope font-700 font-size-2xl lh-1">So, where does it hurt?</div>
                <p class="font-16px mt-3 mb-0 opacity-0.8">Slow site, security worry, an app that's overdue &mdash; tell us what's actually going on. We'll tell you what to fix first.</p>
            </div>
            <a href="contact.php" class="btn bg-white rounded-2 w-max padding-13-33 font-16px line-height-24px font-600" style="color:#076baa;">Talk to Connectia &rarr;</a>
        </div>
    </div>
</div>
