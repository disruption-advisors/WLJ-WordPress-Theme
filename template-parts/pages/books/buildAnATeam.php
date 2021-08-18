<?php require get_template_directory() . "/link-configs.php" ?>

<div class="py-24 border-b border-[#BFBFBF]">
  <div class="content-container">
    <img class="w-full max-w-[260px] md:w-auto mb-8 md:mb-0 md:float-left md:max-w-none" src="<?php esc_attr_e(get_template_directory_uri() . '/src/assets/images/books/buildAnATeam.png') ?>" alt="" />
    <div class="mb-12">
      <h1 class="font-headline leading-snug text-5xl">Build an A-Team:</h1>
      <h2 class="font-headline leading-snug text-4xl mb-8">Play to Their Strengths and Lead Them Up the Learning Curve</h2>
      <p class="text-[#4d4d4d] mb-4">Do you want to have a high-performing team that strives for greatness, even in the face of uncertainty?</p>
      <p class="text-[#4d4d4d] mb-4">Do you want to be a boss people love, while also driving high performance?</p>
      <p class="text-[#4d4d4d] mb-4">Building morale and high performance are about engagement, and engagement is all about learning, argues Whitney Johnson. In over twenty years of research, investing, consulting, and coaching, Johnson has seen that people need continuous learning and fresh challenges to stay engaged. In this book you'll learn how to build an “A” team by leading team members on their current learning curve, how to design their jobs to maximize learning and engagement, and how to implement a seven-step process for advancing up the learning curve.</p>
      <p class="text-[#4d4d4d] mb-8">We all want opportunities to learn, experiment, and grow in our jobs. The best bosses know this, and they know how to make it happen through thoughtful role design and just enough challenge. The result is a team that learns how to thrive, no matter what the industry throws at them.</p>
      <div class="flex flex-wrap">
        <?php get_template_part( 'template-parts/components/buttons/cta', null, array("label" => "Order from Amazon", "href" => $LINKS["build-an-a-team"], "addt-styles" => "mr-2 mt-4")); ?>
      </div>
    </div>
    <div class="clear-left bg-white text-center shadow-behind rounded p-8">
      <p class="text-xl mb-12">"Management, when practiced well, is a noble profession. Build an A Team is an important book for manager who want to help their team members learn, grow and realize their potential."</p>
      <p class="font-headline text-2xl tracking-widest uppercase">Clayton M. Christensen</p>
      <p class="max-w-[750px] mx-auto text-lg uppercase">Former Kim B. Clark Professor of Business Administration, Harvard Business School; New York Times-bestselling author, The Innovator's Dilemma</p>
    </div>
  </div>
</div>