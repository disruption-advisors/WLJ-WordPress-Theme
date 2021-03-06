<?php require get_template_directory() . "/lang/shared.php"; ?>
<?php require get_template_directory() . "/link-configs.php" ?>

<div class="relative flex flex-col lg:flex-row lg:block bg-white p-8 lg:mr-12 rounded-lg">
  <div class="hidden lg:block mb-8 lg:mb-0 text-center lg:absolute lg:-right-12 lg:top-8 xl:top-4">
    <img class="w-[368px] h-[344px] xl:w-[265px] xl:h-[248px] border-4 border-white rounded-lg" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/services/take-the-assessment-new.png') ?>" alt="" width="406" height="311">
  </div>
  <div class="lg:pr-4 xl:pr-0 lg:w-1/2 xl:w-2/3">
    <h4 class="font-subhead text-2xl font-bold text-black tracking-widest mb-4"><?php esc_html_e($lang["whatIsSCurve"]["title"]); ?></h4>
    <p class="text-[#4d4d4d] mb-4"><?php esc_html_e($lang["whatIsSCurve"]["text"]); ?></p>
    <ul class="ml-6 mb-4 text-[#4d4d4d] list-disc space-y-2">
      <li><?php esc_html_e($lang["whatIsSCurve"]["bulletOne"]); ?></li>
      <li><?php esc_html_e($lang["whatIsSCurve"]["bulletTwo"]); ?></li>
      <li><?php esc_html_e($lang["whatIsSCurve"]["bulletThree"]); ?></li>
    </ul>
    <a class="group inline-flex items-center justify-center font-bold text-[#017381] hover:text-[#143b3f]" href="<?php esc_attr_e($LINKS["services"]["s-curve-insight"]) ?>">
      <span class="mr-1 group-hover:underline"><?php esc_html_e($lang["whatIsSCurve"]["ctaText"]); ?></span>
      <span class="material-icons-round mr">arrow_forward</span>
    </a>
  </div>
</div>