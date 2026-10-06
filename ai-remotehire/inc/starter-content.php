<?php
/**
 * Starter content for a new theme preview/activation.
 *
 * @package AI_RemoteHire
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function airh_starter_content() {
	$front_content = <<<'HTML'
<!-- wp:pattern {"slug":"airh/employer-hero"} /-->
<!-- wp:group {"align":"full","className":"airh-proof-note","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull airh-proof-note"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><strong>Remote staffing · International recruiting · Call-center staffing · Sales and lead-generation staffing · Operational support</strong></p><!-- /wp:paragraph --></div><!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"airh-section airh-intro","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide airh-section airh-intro"><!-- wp:columns {"verticalAlignment":"top"} --><div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"38%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:38%"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">A focused staffing conversation</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Start with the work—not a generic job title.</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"top","width":"62%"} --><div class="wp-block-column is-vertically-aligned-top" style="flex-basis:62%"><!-- wp:paragraph {"className":"airh-intro__lead"} --><p class="airh-intro__lead">A dependable remote hire begins with a clear view of responsibilities, outcomes, coverage, tools, and communication. AI-RemoteHire helps businesses explore remote talent options around those practical needs.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Service terms, employment arrangements, timelines, and geographic coverage are confirmed during the consultation. The website will not make promises that have not been approved and documented.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->
<!-- wp:group {"align":"full","className":"airh-section airh-solutions","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull airh-section airh-solutions"><!-- wp:group {"align":"wide","layout":{"type":"default"}} --><div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">Solutions</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Choose the staffing path that fits the work.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Each service page will define its exact commercial model, responsibilities, and approved scope before launch.</p><!-- /wp:paragraph -->
<!-- wp:group {"className":"airh-service-list","layout":{"type":"default"}} --><div class="wp-block-group airh-service-list">
<!-- wp:group {"className":"airh-service-row","layout":{"type":"default"}} --><div class="wp-block-group airh-service-row"><p class="airh-service-row__number">01</p><div><h3 class="wp-block-heading">Remote Staffing</h3><p>Explore remote professionals around defined responsibilities, schedules, tools, and team requirements.</p></div><a href="/remote-staffing/">Explore remote staffing <span aria-hidden="true">→</span></a></div><!-- /wp:group -->
<!-- wp:group {"className":"airh-service-row","layout":{"type":"default"}} --><div class="wp-block-group airh-service-row"><p class="airh-service-row__number">02</p><div><h3 class="wp-block-heading">International Recruiting</h3><p>Discuss a structured search for talent beyond your immediate local market.</p></div><a href="/international-recruiting/">Explore recruiting <span aria-hidden="true">→</span></a></div><!-- /wp:group -->
<!-- wp:group {"className":"airh-service-row","layout":{"type":"default"}} --><div class="wp-block-group airh-service-row"><p class="airh-service-row__number">03</p><div><h3 class="wp-block-heading">Call-Center Staffing</h3><p>Plan customer-facing staffing around channels, schedules, language needs, and supervision requirements.</p></div><a href="/call-center-staffing/">Explore call-center staffing <span aria-hidden="true">→</span></a></div><!-- /wp:group -->
<!-- wp:group {"className":"airh-service-row","layout":{"type":"default"}} --><div class="wp-block-group airh-service-row"><p class="airh-service-row__number">04</p><div><h3 class="wp-block-heading">Sales &amp; Lead Generation</h3><p>Discuss remote sales and lead-generation roles around your process, systems, and expectations.</p></div><a href="/sales-lead-generation/">Explore sales staffing <span aria-hidden="true">→</span></a></div><!-- /wp:group -->
<!-- wp:group {"className":"airh-service-row","layout":{"type":"default"}} --><div class="wp-block-group airh-service-row"><p class="airh-service-row__number">05</p><div><h3 class="wp-block-heading">Operational Support</h3><p>Identify remote support roles that can help your team handle recurring operational work.</p></div><a href="/remote-operations-support/">Explore operational support <span aria-hidden="true">→</span></a></div><!-- /wp:group -->
</div><!-- /wp:group --></div><!-- /wp:group --></div><!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"airh-section airh-process","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide airh-section airh-process"><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column {"width":"40%"} --><div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">How it works</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">A visible process reduces hiring uncertainty.</h2><!-- /wp:heading --><!-- wp:paragraph --><p>The final stages, timing, screening standards, and responsibilities require owner approval before publication.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"60%"} --><div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"airh-steps","layout":{"type":"default"}} --><div class="wp-block-group airh-steps"><div class="airh-step"><span>01</span><div><h3>Define the need</h3><p>Clarify responsibilities, outcomes, schedule, communication, tools, and team context.</p></div></div><div class="airh-step"><span>02</span><div><h3>Confirm the model</h3><p>Document the approved engagement structure, responsibilities, terms, and next steps.</p></div></div><div class="airh-step"><span>03</span><div><h3>Search and evaluate</h3><p>Apply the company’s approved sourcing and screening process. <strong>[PROCESS DETAILS REQUIRED]</strong></p></div></div><div class="airh-step"><span>04</span><div><h3>Select and onboard</h3><p>Coordinate interviews, selection, access, and support. <strong>[PROCESS DETAILS REQUIRED]</strong></p></div></div></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->
<!-- wp:group {"align":"full","className":"airh-section airh-objections","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull airh-section airh-objections"><!-- wp:group {"align":"wide","layout":{"type":"default"}} --><div class="wp-block-group alignwide"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">Before you decide</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">The right conversation should make responsibilities clear.</h2><!-- /wp:heading --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><h3 class="wp-block-heading">Role and fit</h3><p>What will the person own, which tools will they use, and how will success be evaluated?</p></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><h3 class="wp-block-heading">Management and support</h3><p>Who manages training, daily work, performance, access, payroll, and replacement?</p></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><h3 class="wp-block-heading">Security and communication</h3><p>What data, systems, hours, language, and customer interactions are involved?</p></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group --></div><!-- /wp:group -->
<!-- wp:group {"align":"wide","className":"airh-section airh-faq","layout":{"type":"default"}} --><div class="wp-block-group alignwide airh-section airh-faq"><!-- wp:paragraph {"className":"eyebrow"} --><p class="eyebrow">Common questions</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Start with the questions that affect fit.</h2><!-- /wp:heading --><!-- wp:details --><details class="wp-block-details"><summary>What types of staffing support are available?</summary><p>AI-RemoteHire is preparing service paths for remote staffing, international recruiting, call-center staffing, sales and lead-generation staffing, and remote operational support. Exact roles and terms are confirmed during consultation.</p></details><!-- /wp:details --><!-- wp:details --><details class="wp-block-details"><summary>Who employs and manages the remote worker?</summary><p>The engagement model and division of responsibilities must be confirmed for the selected service. <strong>[INPUT REQUIRED]</strong></p></details><!-- /wp:details --><!-- wp:details --><details class="wp-block-details"><summary>How are candidates screened?</summary><p>The approved sourcing, screening, assessment, and reference-check process must be documented before launch. <strong>[INPUT REQUIRED]</strong></p></details><!-- /wp:details --><!-- wp:details --><details class="wp-block-details"><summary>How long does the process take?</summary><p>Timing depends on the role, requirements, and engagement model. No turnaround commitment is published until an approved service standard is supplied.</p></details><!-- /wp:details --></div><!-- /wp:group -->
<!-- wp:pattern {"slug":"airh/final-cta"} /-->
HTML;

	add_theme_support(
		'starter-content',
		array(
			'posts' => array(
				'home' => array(
					'post_type'    => 'page',
					'post_title'   => _x( 'Home', 'Theme starter content', 'ai-remotehire' ),
					'post_content' => $front_content,
				),
				'blog',
				'privacy-policy',
			),
			'options' => array(
				'show_on_front'  => 'page',
				'page_on_front'  => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),
			'nav_menus' => array(
				'primary' => array(
					'name'  => __( 'Primary navigation', 'ai-remotehire' ),
					'items' => array(
						'page_home',
						'link_solutions' => array( 'title' => __( 'Solutions', 'ai-remotehire' ), 'url' => home_url( '/solutions/' ) ),
						'link_process'   => array( 'title' => __( 'How It Works', 'ai-remotehire' ), 'url' => home_url( '/how-it-works/' ) ),
						'link_about'     => array( 'title' => __( 'About', 'ai-remotehire' ), 'url' => home_url( '/about/' ) ),
						'page_blog',
						'link_request'   => array( 'title' => __( 'Request Talent', 'ai-remotehire' ), 'url' => home_url( '/request-talent/' ), 'classes' => 'menu-item-cta' ),
					),
				),
			),
		)
	);
}
add_action( 'after_setup_theme', 'airh_starter_content', 11 );
