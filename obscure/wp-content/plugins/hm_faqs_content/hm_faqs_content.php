<?
/*
Plugin Name: HM FAQs Content
Plugin URI: http://www.hmfusion.com
Description: Prepopulates FAQs Content. <strong color="red">DELETE AFTER ACTIVATION!</strong>. Activating more than once will result in duplicate content.
Version: 1.0
Author: Thai Yin
Author URI: http://www.gaslampmedia.com/
License: All Rights Reserved
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'hm_faqs_content_install'); 

function hm_faqs_content_install() {
	
	global $wpdb;
		
	$faqs = array(
		'floss' => array(
			'title' => 'Do I have to floss?',
			'content' => 'Yes! Flossing removed the bacterial plaque which accumulates between your teeth. Brushing alone cannot remove this. Over time this un-cleaned bacteria can cause decay between your teeth',
		),
		'brush' => array(
			'title' => 'How long should I brush my teeth?',
			'content' => 'You should brush your teeth at least 2-3 minutes twice a day. Get into a routine and always start and end in the same place. That way you will make sure not to miss any parts of your mouth. Unfortunately, most Americans only brush for 45-60 seconds twice a day, and that is just not enough. Many new mechanical toothbrushes have built in timers to help you brush the proper length of time.'
		),
		'mouthwash' => array(
			'title' => 'Should I rinse with a mouthwash?',
			'content' => 'The use of a mouthwash is fine to give yourself a fresh feeling. Try to use an alcohol free mouthwash if possible. Mouthwashes which contain alcohol can dry out the lining of your mouth and decrease saliva flow. Both of these symptoms can contribute to increased bacterial growth and lessen the mouths natural defenses.
',
		),
		'toothpaste' => array(
			'title' => 'What toothpaste should I use?',
			'content' => 'It does not matter what brand of toothpaste you use as long as it contains Fluoride. Just choose a toothpaste that has a pleasant flavor for you.',
		),
		'rinse' => array(
			'title' => 'When I cannot brush my teeth, is there anything that I can do to slow down acid production?',
			'content' => 'Rinse your mouth with water after a meal or snack to neutralize acid and reduce bacteria by 30%. Also chewing sugarless gum or gum containing Xylotol has been shown to decrease the incidence of decay.',
		),
		'whitening' => array(
			'title' => 'Will a whitening toothpaste really whiten my teeth?',
			'content' => 'Not entirely. Whitening toothpastes will reverse the effects of some surface stains, but not change the shade of the teeth themselves. The change is usually minimal.',
		),
		'bleaching' => array(
			'title' => 'Do over-the-counter bleaching products work?',
			'content' => 'There is some evidence that over-the-counter bleaching products do whiten teeth, however these products are not used under the supervision of your dentist and There may be potential problems which may need attention prior to whitening in this Way. Also, the trays usually sold with these products do fit as well as those that are custom made by your dentist. As a result, damage to your gums and teeth is possible.',
		),
		'ulcers' => array(
			'title' => 'What can be done for ulcers or canker sores in the mouth?',
			'content' => 'Ulcers are very difficult to treat. There is no proven technique that will eliminate ulcers. They can occur as a result of trauma or due to a viral source. Depending On their cause there are specific medications that can shorten their duration. Left alone, ulcers will generally diminish and disappear in two weeks.'
		),
		'breath' => array(
			'title' => 'What causes bad breath?',
			'content' => 'Bad breath or halitosis, can be caused by many things. The most common cause is the presence of bacteria in your mouth and on your tongue. These bacteria produce odorous compounds. In some cases, the cause of bad breath can be from gastrointestinal origin.',
		),
		'decay' => array(
			'title' => 'What causes tooth decay?',
			'content' => 'Tooth decay is caused by bacteria (plaque) in your mouth which react with sugary and starchy deposits from food you eat. This reaction produces acid which damages the enamel over time and weakens the tooth.',
		),
		'sensitive' => array(
			'title' => 'Why are my teeth sensitive to cold?',
			'content' => 'Cold sensitivity can be due a number of reasons. Some people are just generally more sensitive to temperature changes. Other causes may be due to recession of the gum tissue, abrasions of the teeth, large metal restorations or decay. Treatments for this condition can include fillings, fluoride applications or the use of desensitizing toothpastes.',
		),
		'bleed' => array(
			'title' => 'Why do my gums bleed?',
			'content' => 'Your gums bleed as a result of inflammation caused by the presence of bacteria in your mouth. This bacteria when not properly cleaned off your teeth will result in an irritation of the gum tissue. This irritation called gingivitis, will result in red, puffy and bleeding gums. Gone untreated, it can progress into periodontal disease.',
		),
	);
	
	
	foreach($faqs as $faq) {
		
		$page = array();
		$page['post_title'] = $faq['title'];
		$page['post_content'] = $faq['content'];
		$page['post_status'] = 'publish';
        $page['post_type'] = 'faqs';
        $page['comment_status'] = 'closed';
        $page['ping_status'] = 'closed';
		$the_page_id = wp_insert_post( $page );
		
	}
	
	
}

?>