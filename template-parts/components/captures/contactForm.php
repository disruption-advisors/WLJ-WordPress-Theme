<?php require get_template_directory() . "/link-configs.php" ?>

<form class="<?php if(array_key_exists("classes", $args) === true) { esc_attr_e($args["classes"]); } ?>" method="post" onSubmit="(e) => { e.preventDefault(); }">
  <div class="grid grid-cols-2 grid-rows-6 gap-2 mb-4">
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="firstName" placeholder="First Name" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="lastName" placeholder="Last Name" required />
    <input class="col-span-2 text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="email" placeholder="Email" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="organization" placeholder="Organization" required />
    <input class="w-full text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded" type="text" name="jobTitle" placeholder="Job Title or Role" required />
    <select class="w-full text-[14px] px-4 py-3 border border-[#939E9E] rounded" name="interestedIn" required>
      <option selected disabled>What are you interested in?</option>
    </select>
    <select class="w-full text-[14px] px-4 py-3 border border-[#939E9E] rounded" name="hearAboutUs" required>
      <option selected disabled>How did you find out about us?</option>
    </select>
    <textarea class="col-span-2 row-span-2 text-[14px] px-4 py-3 border border-[#939E9E] placeholder-[#808080] rounded resize-none" name="description" placeholder="How can we help?"></textarea>
  </div>
  <div class="flex items-center mb-4">
    <input class="w-5 h-5 border border-[#939E9E] rounded mr-2 cursor-pointer" type="checkbox" name="optIn" />
    <label for="optIn" class="text-xs cursor-pointer">
      <span class="text-[#4d4d4d]">I'd like to receive emails from Disruption Advisors.</span>
      <a href="<?php esc_attr_e($LINKS["privacy-policy"]); ?>" target="_blank" rel="noopener" class="font-semibold text-[#017381] hover:underline">Privacy Policy</a>
    </label>
  </div>
  <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Submit", "role" => "submit")); ?>
</form>