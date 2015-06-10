<?
/*
Plugin Name: HM Services Content
Plugin URI: http://www.hmfusion.com
Description: Prepopulates Services Content. <strong>DELETE AFTER ACTIVATION!</strong>. Activating more than once will result in duplicate content.
Version: 1.0
Author: Thai Yin
Author URI: http://www.gaslampmedia.com/
License: All Rights Reserved
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'hm_services_content_install'); 

function hm_services_content_install() {
	
	global $wpdb;
	
	$plugin = plugin_basename( __FILE__ );
	
	$services = array(
		'bonding' => array(
			'title' => 'Bonding',
			'content' => '
      <p>Dental bonding is a procedure in which a tooth-colored resin material (a durable plastic material) is applied and hardened with a special light, which ultimately “bonds” the material to the tooth to restore or improve person’s smile.</p>
<h3>For What Conditions Is Dental Bonding Considered?</h3>
<p>Dental bonding is an option that can be considered:</p>
<ul>
<li>To repair decayed teeth (composite resins are used to fill cavities)</li>
<li>To repair chipped or cracked teeth</li>
<li>To improve the appearance of discolored teeth</li>
<li>To close spaces between teeth</li>
<li>To make teeth look longer</li>
<li>To change the shape of teeth</li>
<li>As a cosmetic alternative to amalgam fillings</li>
<li>To protect a portion of the tooth’s root that has been exposed when gums recede</li>
</ul>
<h3>What’s the Procedure for Having a Tooth Bonded?</h3>
<ul>
<li><strong>Preparation:</strong> Little advance preparation is needed for dental bonding. Anesthesia is often not necessary unless the bonding is being used to fill a decayed tooth. Your dentist will use a shade guide to select a composite resin color that will closely match the color of your tooth.</li>
<li><strong>The bonding process</strong>: Next, the surface of the tooth will be roughened and a conditioning liquid applied. These procedures help the bonding material adhere to the tooth. The tooth-colored, putty-like resin is then applied, molded, and smoothed to the desired shape. An ultraviolet light or laser is then used to harden the material. After the material is hardened, your dentist will further trim and shape it, and polish it to match the sheen of the rest of the tooth surface.</li>
<li><strong>Time-to-completion:</strong>&nbsp;Dental bonding takes about 30 to 60 minutes per tooth to complete.</li>
</ul>',
		),
		'cerec' => array(
			'title' => 'CEREC',
			'content' => '<p>Chairside Economical Restorations of Esthetic Ceramic (CEREC®) has pioneered dental procedures. CEREC® is made up of many computer-assisted design (CAD) tools and a milling machine that gives dentists the ability to create custom-made ceramic restoratives in little time.</p>
<p>In the past, patients would have endured many procedures, and a lot of lag time in between those, to restore damaged teeth with crowns, lays, inlays or dental veneers. With CEREC®, patients do not have to wait because CEREC® has the ability to make ceramic restorations in minutes. This means that some procedures will restore your teeth in only one visit.</p>
<h3>What is the CEREC® system?</h3>
<p>The CEREC® system is also referred to as a CAD-CAM system. Simply put, CAD stands for “Computer Assisted Design” and CAM stands for “Computer Assisted Milling.” Therefore, CEREC® uses computer design and a milling device to create custom-made restorations.</p>
<p>Below you will find information on the three major components of the CEREC® system:</p>
<ul>
<li>Acquisition device – This device uses a high-quality camera and a medical grade computer. The unit works together to photograph the tooth you want restored. The device creates three-dimensional images of the tooth on the computer screen. The dentist uses that image to design your custom-made restoration.</li>
<li>Three-dimensional CAD software – This provides the dentist with the ability to look at the tooth from every angle. Using this technology, the dentist comes as close as possible to examining the tooth in his/her hands while rotating it on the screen.</li>
<li>Milling device – This unit makes the custom restoration based on the specifications from the computer. Your dentist chooses a ceramic block that provides the closest match to your existing tooth color. That block is then placed into the unit. After a few minutes, the milling device produces the restoration designed by your dentist.</li>
</ul>
<h3>Is the CEREC® restoration procedure complex?</h3>
<p>No. CEREC® makes it easy for your dentist to customize your new restoration. Below you will find detailed steps about the procedure:</p>
<ul>
<li>The dentist prepares the tooth by removing all decay and creating a divergent occlusal axial wall. The dentist creates that wall to make the opening of the tooth wider than the actual base.</li>
<li>The dentist takes an impression of the tooth using titanium dust. The dust works with the camera to take a detailed photo of the tooth being restored.</li>
<li>The camera takes those detailed images of the tooth using optical imaging with an infrared wavelength.</li>
<li>The image becomes transposed on the computer screen. This is where the dentist views the tooth from all angles so he/she has the needed visuals to design the restoration.</li>
<li>The dentist completes the design and transmits it to the milling unit. </li>
<li>The dentist chooses a block of ceramic that closely matches your teeth’s color. This creates natural looking and virtually invisible results.</li>
<li>Within 15 minutes, the milling unit creates the crown, onlay, overlay or veneer using compressed porcelain instead of laboratory-layered porcelain. Compressed porcelain makes stronger and more durable restorations and saves patients time and money.</li>
<li>The dentist then places the dry restoration to ensure fit. Once your dentist determines the fit, he/she will polish the restoration and affix it to the tooth using dental cement. </li>
</ul>
<p>That completes the process and you do not have to go back for a second fitting!</p>
<h3>Will CEREC® benefit me?</h3>
<p>CEREC® benefits many patients looking for a ceramic restoration device. Some advantages include:
<ul>
<li>Permanent (no temporary ones) and long-lasting restorations</li>
<li>High-quality devices that save more natural tooth</li>
<li>Less-invasive procedures for patients</li>
<li>Fewer injections resulting in less discomfort for patients</li>
<li>Fewer dental visits means fewer costs to patients</li>
<li>Biocompatible solutions that do not harm the body</li>
<li>No horrible-tasting impressions </li>
<li>No time-consuming transfers to and from a lab</li>
</ul>
<p>Some exceptions apply. If you have a history of breaking these types of devices or you have a deep bite, you should speak to your dentist because these products may not be the best option for you.</p>
<h3>How long do CEREC® devices last?</h3>
<p>We know that CEREC® devices last for over five years. Now, research shows that most CEREC®-created restorations may last for more than 10 years.</p>
<p>Your dentist will provide additional information and answer any questions you have regarding CEREC®</p>',
		),
		'bridges' => array(
			'title' => 'Bridges',
			'content' => '<p>There are several types of bridges and your dentist will be sure to share with you all of the available options for your situation. Porcelain fixed bridges, also known as “traditional” bridges, are the most popular. The “traditional” bridge is a non-removable appliance made of porcelain fused to metal that is used for replacing missing teeth. As with other porcelain-based dental treatments, they are specially crafted to match the coloration of your own natural teeth, allowing them to blend in seamlessly. The bridge consists of two crowns cemented over two anchoring teeth known as abutment teeth. These are then attached to artificial teeth, known as pontics, that fill the gap created by one or more missing teeth.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>Gaps left by missing teeth</li>
<li>Damaged facial shape</li>
<li>The drifting placement of remaining teeth</li>
<li>Improper chewing</li>
<li>Speech problems caused by improper dental structure</li>
<li>The need for removable partial dentures</li>
<li>The general beauty of your smile</li>
</ul>
<h3>How is the procedure done?</h3>
<p>Setting a bridge in place requires two or more dental visits, depending on the specific circumstances of each patient. The dentist will numb the teeth and prepare the two anchoring teeth to receive the crowns that will lock the bridge in place. Once the teeth are prepared, a mold will be taken for the dental laboratory that will fabricate the permanent bridge. The dentist will then cement a temporary bridge in place to be worn for several weeks until your next appointment.</p>
<p>On the second visit, the dentist will carefully check, adjust, and cement the permanent bridge in place. In some cases, the dentist may need to set the permanent bridge with a temporary cementing process to allow your teeth and gum tissue time to adjust. Once this process is complete, the dentist will permanently cement the new bridge in place.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>Permanent dental bridges require very little special attention to last for a very long time. At the conclusion of the treatment, the dentist will give you specific care instructions, and the continued practice of brushing, flossing, and regular dental cleanings will help to ensure the proper functioning of your permanent bridge. Keep in mind that dental bridges are very durable, but may eventually need replacement or re-cementing due to normal wear.</p>',
		),
		'consultation' => array(
			'title' => 'Consultation',
			'content' => ' <p>Our ultimate goal is to secure the safety, health, and beauty of your teeth for a lifetime so you can always smile with confidence. The very best way to achieve this is through an individually tailored prevention program designed through the cooperative effort of the patient, the dentist, and our dental staff.</p>
<p>With the practice of good oral hygiene at home combined with a balanced diet and regular dental visits, we can effectively preserve the natural dentition of your teeth and their supporting structures for years to come. This is the very best way to minimize or eliminate the onset, progress, and recurrence of dental diseases and conditions that can result in serious and costly dental problems. Let us help you maintain a healthy, confident, and beautiful smile.</p>',
		),
		'cosmetic_dentistry' => array(
			'title' => 'Cosmetic Dentistry',
			'content' => ' <p>Over the past decade, interest in improving and maintaining an attractive smile has risen dramatically. Modern cosmetic dentistry has developed numerous quick, painless, and surprisingly affordable ways to address the wide variety of problems that can arise in the appearance and dental structure of teeth. These treatments help to build and protect bright and healthy smiles that can enhance appearance and often improve self confidence. Here is a list of what modern cosmetic dental treatments can accomplish:</p>
<ul>
<li>Change the size, shape, and alignment of individual teeth</li>
<li>Fill in unattractive spaces between teeth</li>
<li>Improve or correct bite positions</li>
<li>Lighten or brighten tooth color</li>
<li>Repair decayed, broken, cracked, or chipped teeth</li>
<li>Replace missing teeth</li>
<li>Replace old, unattractive dental treatments</li>
</ul>',
		),
		'crowns' => array(
			'title' => 'Crowns',
			'content' => '<p>A crown (or cap) is a covering that encases the entire tooth, restoring it to its original shape and size. Crowns are a good treatment option when the integrity of a given tooth has been damaged to the point where fillings or other types of restorations can not properly repair it. While several types of crowns are available, porcelain crowns are popular because they can mimic the natural color of teeth.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>Broken or fractured teeth</li>
<li>Fractured fillings</li>
<li>Severely decayed teeth</li>
<li>Cosmetic flaws</li>
<li>Loss of tooth integrity due to root canals</li>
</ul>
<h3>How is the procedure done?</h3>
<p>Placing a crown will generally require two appointments. At the first appointment the dentist will numb the tooth, remove decay, and shape the remaining surface to properly fit the crown. Several molds, or impressions, will then be taken of the tooth for creating your custom crown. The dentist will cement a temporary crown in place and check your bite to ensure that it has been properly placed. This will function for you as a normal tooth for about two weeks while your permanent crown is fabricated in a dental laboratory. Once the permanent crown is finished, you will return to the dentist’s office to have your new crown carefully set in place.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>Fortunately, crowns function almost exactly like normal teeth, so you will only rarely notice that it is even present. The dentist will give you care instructions and the continued practice of brushing, flossing, and visiting the dentist regularly will help ensure the proper functioning of your new crown. The high durability of porcelain crowns helps them to last many years, but they may eventually need to be replaced.</p>',
		),
		'custom_smile' => array(
			'title' => 'Custom Smile Design',
			'content' => '<p>Over the past decade, interest in improving and maintaining an attractive smile has risen dramatically. Modern cosmetic dentistry has developed numerous quick, painless, and surprisingly affordable ways to address the wide variety of problems that can arise in the appearance and dental structure of teeth. These treatments help to build and protect bright and healthy smiles that can enhance appearance and often improve self confidence. Here is a list of what modern cosmetic dental treatments can accomplish:</p>
<ul>
<li>Change the size, shape, and alignment of individual teeth</li>
<li>Fill in unattractive spaces between teeth</li>
<li>Improve or correct bite positions</li>
<li>Lighten or brighten tooth color</li>
<li>Repair decayed, broken, cracked, or chipped teeth</li>
<li>Replace missing teeth</li>
<li>Replace old, unattractive dental treatments</li>
</ul>',
		),
		'xray' => array(
			'title' => 'Digital X-Rays',
			'content' => ' <p>Dental x-rays, known as radiographs, are essential diagnostic tools for the prevention of serious dental diseases and complications. They provide the dentist with valuable information not available through a regular dental exam. Identifying such problems early saves you time, money, and necessary pain. Dental x-rays can reveal:</p>
<ul>
<li>Tooth abscesses or cysts</li>
<li>Bone loss</li>
<li>Tumors, both cancerous and non-cancerous</li>
<li>Decay between teeth</li>
<li>Developmental abnormalities</li>
<li>Poor tooth and root positions</li>
<li>Problems inside a tooth and below the gum line</li>
</ul>
<p>Patients often wonder if dental x-rays are safe. While x-rays do use low-level radiation to capture images, the amount of radiation exposure a patient receives from a full mouth series of dental x-rays is equal to what a person normally receives in a single day from natural sources present in our everyday lives. With precautions in place, x-rays are perfectly safe.</p>
<p>Dental x-rays are not taken on every check-up visit. The dentist regularly reviews each patient’s unique situation and requests the x-rays only when necessary based on medical and dental history, regular screenings, age considerations, and risk for disease. A full mouth series is recommended for new patients and is generally good for three to five years. Bite-wing x-rays (x-rays of top and bottom teeth biting together) are generally recommended once or twice a year.</p>',
		),
		'fillings' => array(
			'title' => 'Fillings',
			'content' => ' <p>Fillings are used to repair a tooth damaged by decay, cracks, and minor fractures. They come in a wide variety of materials, each with their own advantages and disadvantages. The excellent durability of silver amalgam fillings often makes them a good choice. Unfortunately, they are also easily visible in contrast to the natural white color of teeth. The advantage of a composite filling is its natural tooth coloration which allows it to become essentially invisible, often making it the best choice for use in highly visible areas. Should you choose a composite filling, the dentist will closely match the color of the filling to that of your existing teeth to ensure the continued beauty of your smile.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>Tooth decay</li>
<li>Chipped teeth</li>
<li>Wide spaces between teeth</li>
<li>Cracked or broken teeth</li>
<li>Worn teeth</li>
</ul>
<h3>What can this procedure repair?</h3>
<ul>
<li>Discoloration caused by Fluorosis (excessive fluoridation during tooth development)</li>
<li>Normal wear of the outer tooth layer</li>
<li>Stained teeth due to medications (tetracycline, etc.)</li>
<li>Yellow and brown stains on teeth</li>
</ul>
<h3>How is the procedure done?</h3>
<p>Composite fillings can usually be placed in one appointment. The dentist will numb the tooth and remove decay. Then it will be thoroughly cleaned and carefully prepared for the new filling. In some cases where they decay comes close to the nerve of the tooth, special medication will be applied for added protection. Once the tooth is prepared, the dentist precisely places, sculpts, and polishes the composite filling, restoring your tooth to its original shape and function.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>Initially, many people experience sensitivity to hot and cold when the composite filling is first placed. This is temporary, however, and it will fade quickly as your tooth acclimates to the new filling. The dentist will provide general care instructions, and the regular practice of brushing, flossing, and dental cleanings will help extend the life of your new filling. While composite fillings are durable enough to last for many years, they are not permanent and may someday need to be replaced.</p>',
		),	
		'gum_disease' => array(
			'title' => 'Gum Disease',
			'content' => '<p>The word periodontal means &#8220;around the tooth&#8221;. Periodontal disease is a condition in which forms of bacteria known as plaque and tartar (calculus) have infected the teeth and their supporting gum and bone structures. Plaque is a slick film of food debris, bacteria, and saliva that forms on the teeth all the time as you eat and drink through the day. Plaque becomes tartar when left in place for more than twenty-four hours. The two together actively destroy tooth, gum, and bone tissue. Periodontal disease, characterized by red, swollen, and bleeding gums, is so common that four out of five people have it but remain unaware of it because the disease is usually painless in the early stages.</p>
<p>In fact, the disease is so common that it is the number one cause of tooth loss. Additionally, current research suggests that the inflammation and bacteria associated with periodontal disease may affect other systemic diseases like stroke, bacterial pneumonia, diabetes, cardiovascular disease, and increased risk during pregnancy. Fortunately, good oral hygiene, a balanced diet, and regular dental visits are easy ways to significantly reduce the risk of developing periodontal disease.</p>
<ul>
<li>The following is a list of symptoms that suggest the presence of periodontal disease:</li>
<li>Bleeding Gums: Gums should never bleed, even with vigorous brushing or flossing.</li>
<li>Loose Teeth: Often caused by weakened periodontal fibers, the muscle tissue that binds teeth to the bone.</li>
<li>New Spaces Between Teeth: This may be suggestive of bone loss.</li>
<li>Persistent Bad Breath: Often caused by too much bacteria in the mouth.</li>
<li>Tender or Receding Gums: Bacteria can cause an uncomfortable inflammation of the gums, eventually creating a loss of gum tissue around the tooth.</li>
<li>Pus on Teeth and Gums: Pus is a sign of serious bacterial infection.</li>
</ul>',
		),
		'implants' => array(
			'title' => 'Implants',
			'content' => '<p>Dental implants provide a permanent solution for missing teeth, relieving the patient from the hassle associated with partial or complete dentures. They are artificial roots and teeth that are custom crafted for your dentition and surgically placed into the jawbone by a dentist or periodontist—a specialist of the gums and supporting bone. Though made of titanium for strength, dental implants look very natural and often enhance the patient’s smile. Strong, stable, and durable, dental implants will last many years, though they sometimes require re-tightening or replacement due to normal wear.</p>
<h3>What can dental implants correct?</h3>
<ul>
<li>Missing teeth</li>
<li>Joint pain or bite problems caused by teeth shifting into vacant spaces</li>
<li>Cosmetic problems with one’s smile</li>
<li>Improper chewing</li>
<li>Problems with chewing, speech, and digestion</li>
<li>The need for removable partial dentures</li>
<li>Misaligned facial tissues</li>
</ul>
<h3>What’s the procedure for getting dental implants?</h3>
<p>Getting dental implants requires a number of visits over several months. The dentist will begin by taking x-rays and impressions, or molds, of the jaw and teeth to gather information about bone tissue, gum tissue, and available spacing for implants. Once the implants are crafted from the molds, the dentist will numb the patient and surgically place them into the bone. Healing and proper bone integration can take up to six months.</p>
<p>Some implants come with pre-attached posts where others may require a second surgery for placement of the posts that anchor the artificial teeth. Once the posts are in place and the mouth is fully healed, the dentist will mount the artificial teeth. Since adjustment may be necessary, several fitting sessions are often required over the course of one to two months. When tooth alignment is confirmed and healing is complete, the dentist permanently secures the artificial teeth to the implant, providing long-term stability and comfort for the patient.</p>
<p>The dentist will provide care instructions when the treatment is complete. Good oral hygiene, eating habits, and regular dental visits all aid in the life of your new implants.</p>',
		),
		'invisalign' => array(
			'title' => 'Invisalign',
			'content' => '<p>When people find themselves in need of braces, their primary concerns center around the physical discomfort of the process and the aesthetic impact of the metalwork on their smile. While the prospect of wearing braces is challenging even for the young, this fear is amplified for adults.</p>
<p>With this in mind, Invisalign® has designed a completely metal-free and almost invisible aligning system that straightens teeth just as quickly and efficiently as traditional metal braces, significantly reducing the negative visual impact on your smile. The Invisalign® treatment consists of a series of custom made aligning trays that the dentist switches out every few weeks as the teeth migrate into their new tooth configuration. Invisalign® trays can even be temporarily removed for important occasions, giving the patient both freedom and responsibility in the application of his or her treatment.</p>
<p>Many patients have reported great satisfaction with both the advantages of the Invisalign® treatment system and the stunning results they achieve.</p>
<p><strong>What can Invisalign® repair?</strong><br />
	Invisalign® is used to correct the same dental problems addressed by traditional metal braces with the added advantages of being almost invisible to the naked eye and easily removed at will. Here is a list of some problems commonly corrected with Invisalign®:</p>
<ul>
<li>Overcrowding – Too many teeth in too small a space keeps them from aligning correctly, causing higher levels of tooth decay and a greater likelihood of gum disease.</li>
<li>Gaps – Gaps are created by too few teeth in too large a space, often the result of missing teeth or abnormal jaw growth.</li>
<li>Crossbite – Crossbites occur when one or more upper teeth bite inside the lower teeth, causing uneven wear that leads to bone erosion and gum disease.</li>
<li>Overbite – Overbites occur when the upper teeth project out over the lower teeth, eventually leading to jaw pain and TMJ.</li>
<li>Underbite – An underbite is the inverse of an overbite; the lower teeth project out past the upper teeth, once again leading to jaw pain and TMJ.</li>
</ul>
<p><strong>What advantages does Invisalign® offer over traditional braces and veneers?</strong><br />
	While all three treatments are useful under different circumstances for perfecting teeth alignment, Invisalign® has a number of unique advantages over both traditional dental braces and dental veneers:</p>
<ul>
<li>Unlike traditional braces, Invisalign® trays are both nearly invisible and fully removable. While this makes them significantly better for the aesthetic appearance of your smile during treatment, they also require more discipline and commitment from the patient to ensure proper treatment. Used correctly, Invisalign® can achieve results almost identical to those obtained by using traditional braces.</li>
<li>Veneers are thin ceramic covers designed to permanently affix to the existing dental structure. They are somewhat expensive, can sometimes break, and often last less than twenty years. In addition, the teeth must be etched to achieve a proper fitting, so the dentist has to place alternative coverings should the patient ever want the veneers removed. Invisalign® is preferable to veneers because it corrects the underlying structural problems in the dentition while avoiding damage to the integrity of the individual teeth.</li>
</ul>
<p><strong>What’s the procedure for the Invisalign® treatment?</strong><br />
	Initially, your dentist will take three-dimensional images of the entire jaw. These images are uploaded to a computer where the dentist can move teeth around, view the jaw from different angles, and project what the final results will look like, allowing you and your dentist to see how the Invisalign® treatment will change your facial aesthetics. Through this process your dentist will devise an initial treatment plan.</p>
<p>From this plan a unique set of alignment trays is custom crafted for your teeth. The number of trays required varies, but 20-29 sets per arch over the course of the treatment is typical.</p>
<p><strong>What do I need to consider before deciding on Invisalign®?</strong><br />
	For the first few weeks, the use of Invisalign® will take some getting used to. Trays should be worn at all times except when eating or drinking because food can easily get trapped between the tray and the teeth, creating problems with tooth decay. Expect new trays every two weeks or so, and watch for progress between appointments as this can usually be seen with the naked eye.</p>
<p>Invisalign®, known for being both comfortable and effective, has undoubtedly revolutionized orthodontics.</p>
<p>If you have questions about Invisalign®, please ask your dentist.</p>',
		),
		'onlays' => array(
			'title' => 'Onlays',
			'content' => '<p>Inlay and onlay restorations are custom-crafted fillings traditionally made of composite material, gold, or tooth-colored porcelain. Many patients prefer porcelain inlays and onlays because they resemble your natural teeth much like the composite material, but have the added advantage of being more durable.</p>
<p>Porcelain inlays and onlays can also be utilized to conservatively repair damage that is too severe to be repaired by a traditional filling, but also not severe enough to require a full-crown procedure. In this way, teeth that have large defective fillings or more severe damage caused by decay or trauma can be restored without significant loss to the natural structure of the teeth.</p>
<h3>Here is a list of reasons why your dentist might suggest a porcelain inlay or onlay treatment:</h3>
<ul>
<li>Broken or fractured teeth</li>
<li>Decayed teeth</li>
<li>Fractured fillings</li>
<li>A cavity that requires a large fitting</li>
<li>A specific cosmetic enhancement for which they might be the best solution</li>
</ul>
<p>Inlays often make an ideal alternative to conventional silver and composite fillings, while onlays can sometimes be used in place of crowns (caps). For this reason, porcelain onlays are sometimes referred to as partial crowns. The two treatments are essentially identical except that the additional coverage onlays provide is used when one or more of the chewing cusps have been damaged and need to be included in the restoration.</p>
<p>Both porcelain inlays and porcelain onlays are manufactured in a professional dental laboratory and then permanently cemented into place by your dentist. While porcelain inlays and onlays are highly durable, they are not always permanent and may eventually require replacement. That said, these treatments have a long record of providing patients with a beautiful smile that lasts for many, many years.</p>
<h3>How are porcelain inlays and onlays applied?</h3>
<p>Placing a porcelain inlay or onlay usually requires two appointments. At the first appointment, your dentist will numb the teeth selected for treatment and remove any decay and old filling materials. Once cleared, the teeth will be thoroughly cleaned and carefully prepared by shaping the surface to properly fit your restoration. With the teeth now set to receive the inlay or onlay, the dentist will take several highly accurate impressions, or molds, that will be used to create both your custom porcelain inlay or onlay and a temporary restoration. The mold will be sent to the dental laboratory, and a temporary filling will be set in place on your tooth or teeth to protect them while your restoration is crafted.</p>
<p>During your second appointment, the dentist will carefully and precisely cement your new restoration in place, making adjustments as necessary to ensure a proper fit and a comfortable bite. You will receive proper care instructions at the conclusion of your treatment, and, of course, good oral hygiene practices, a proper diet, and regular dental visits will significantly prolong the life of your new restoration.</p>
<p>Should you have any questions about porcelain inlays or onlays, please ask your dentist.</p>',
		),
		'orthodontics' => array(
			'title' => 'Orthodontics',
			'content' => '<p>Orthodontics is a branch of dentistry that specializes in treating patients with improper positioning of teeth when the mouth is closed (malocclusion), which results in an improper bite. Orthodontics also includes treating and controlling various aspects of facial growth (dentofacial orthopedics) and the shape and development of the jaw. An orthodontics specialist is called an orthodontist.</p>
<p>Orthodontics used to be called orthodontia &#8211; the word comes from the Greek orthos, meaning &#8220;straight, perfect or proper&#8221;, and dontos, which means &#8220;teeth&#8221;.</p>
<p>Orthodontics also includes cosmetic dentistry; when the patient&#8217;s aim is to improve his/her appearance.</p>
<p>An orthodontist uses a range of medical dental devices, including headgears, plates, braces, etc. to help in:</p>
<ul>
<li>Closing wide gaps between the teeth</li>
<li>Making sure the tips of the teeth are aligned</li>
<li>Straightening crooked teeth</li>
<li>To improve speech or eating (oral function)</li>
<li>To improve the long-term health of gums and teeth</li>
<li>To prevent long-term excessive wear or trauma (of the teeth)</li>
<li>Treating an improper bite</li>
</ul>',
		),
		'power_whitening' => array(
			'title' => 'Power Whitening',
			'content' => '<p>Did you know that having whiter teeth has now become the number one aesthetic concern of most patients? Fortunately, tooth whitening, or bleaching, is an ideal way to brighten your smile using a straight-forward, non-invasive dental treatment. Modern dental technology has developed a simple and highly effective home-based whitening system. Since the system only works on natural tooth enamel, your dentist will be sure to perform any other necessary restoration procedures after the tooth bleaching process is complete so those treatments can be designed to match the coloration of the newly-whitened teeth.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>An abscess (or pimple) on the gums.</li>
<li>Sensitivity to hot and cold.</li>
<li>Severe toothache pain.</li>
<li>Swelling or tenderness.</li>
</ul>
<h3>What can this procedure repair?</h3>
<ul>
<li>Discoloration caused by Fluorosis (excessive fluoridation during tooth development)</li>
<li>Normal wear of the outer tooth layer</li>
<li>Stained teeth due to medications (tetracycline, etc.)</li>
<li>Yellow and brown stains on teeth</li>
</ul>
<h3>How is the procedure done?</h3>
<p>This procedure generally requires two office visits. At the first appointment, the dentist will create molds of your teeth that will be used to fabricate custom, clear plastic trays. Once the trays are ready, you will be asked to return so the dentist can check for a proper fit and make any necessary adjustments. The patient may then choose to wear the trays either twice a day for thirty minutes, or overnight. The entire process takes about two weeks depending on the degree of staining and the desired level of whitening.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>The dentist will clearly explain the procedure and give care instructions for both your teeth and the whitening trays. Many patients experience tooth sensitivity during the whitening process, but it passes quickly once the treatment period is complete. The effect is not permanent, so a touch-up may be necessary every few years, particularly if you smoke, or drink coffee, tea, or wine. Naturally, brushing, flossing, and regular dental visits will help maintain the beauty of your smile.</p>',
		),	
		'porcelain_veneers' => array(
			'title' => 'Preventative and Restorative Porcelain Veneers',
			'content' => '<p>Veneers are thin pieces of durable porcelain custom made in a professional dental laboratory to match the shape and color of a given patient’s teeth. The dentist bonds them to the front of the teeth, creating a beautiful and attractive smile. The ideal solution to many dental conditions, porcelain veneers have the power to completely reshape your teeth and smile.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>Crooked teeth</li>
<li>Misshapen teeth</li>
<li>Severely discolored or stained teeth</li>
<li>Unwanted or uneven spaces</li>
<li>Worn or chipped teeth</li>
<li>Most minor cosmetic flaws</li>
</ul>
<h3>How is the procedure done?</h3>
<p>Getting porcelain veneers usually requires two visits. With little or no anesthesia, the dentist will prepare the teeth by lightly buffing and shaping their surfaces. A mold of the teeth will be taken, and the dentist will help you choose a shade of color fitting to your needs. On the second visit, the dentist will clean your teeth with specialized liquids designed to prepare the teeth for a durable bond. The veneers can then be cemented into place, restoring a bright and vibrant smile.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>At the last appointment, the dentist will give you specific care instructions for the porcelain veneers. Of course, brushing, flossing, and visiting the dentist regularly will help to protect the shining beauty of your new smile. Remember that veneers will provide you with a beautiful smile for many years, but they may eventually need replacement to maintain the same level of quality.</p>',
		),
		'sedation' => array(
			'title' => 'Sedation',
			'content' => '<p>Does the thought of having your teeth cleaned make your entire body tense with fear? Would you rather endure the agony of a toothache than step foot in a dentist&#8217;s office? You&#8217;re not alone. A lot of people are so phobic about going to the dentist that they prefer not to have any treatment.</p>
<p>For people who avoid dentists like the plague, sedation dentistry may take away some of their anxiety. Sedation can be used for everything from invasive procedures to a simple tooth cleaning. How it&#8217;s used depends on the severity of the fear.</p>
<h3>What Is Sedation Dentistry?</h3>
<p>Sedation dentistry uses medication to help patients relax during dental procedures. It&#8217;s sometimes referred to as &#8220;sleep dentistry,&#8221; although that&#8217;s not entirely accurate. Patients are usually awake with the exception of those who are under general anesthesia.</p>
<p>The levels of sedation used include:</p>
<ul>
<li>Minimal sedation &#8212; you are awake but relaxed.</li>
<li>Moderate sedation (formerly called &#8220;conscious sedation&#8221;) &#8212; You may slur your words when speaking and not remember much of the procedure.</li>
<li>Deep sedation &#8212; you are on the edge of consciousness but can still be awakened.</li>
<li>General anesthesia &#8212; you are completely unconscious.</li>
</ul>
<h3>What Types of Sedation Are Used in Dentistry?</h3>
<p>The following types of sedation are used in dentistry:</p>
<ul>
<li>Inhaled minimal sedation. You breathe nitrous oxide &#8212; otherwise known as &#8220;laughing gas&#8221; &#8212; combined with oxygen through a mask that&#8217;s placed over your nose. The gas helps you relax. Your dentist can control the amount of sedation you receive, and the gas tends to wear off quickly. This is the only form of sedation where you may be able to drive yourself home after the procedure.</li>
<li>Oral sedation. Depending on the total dose given, oral sedation can range from minimal to moderate. For minimal sedation, you take a pill. Typically, the pill is Halcion, which is a member of the same drug family as Valium, and it&#8217;s usually taken about an hour before the procedure. The pill will make you drowsy, although you&#8217;ll still be awake. A larger dose may be given to produce moderate sedation. This is the type of anesthesia most commonly associated with sedation dentistry. Some people become groggy enough from moderate oral sedation to actually fall asleep during the procedure. They usually can, though, be awakened with a gentle shake.</li>
<li>IV moderate sedation. You receive the sedative drug through a vein, so it goes to work more quickly. This method allows the dentist to continually adjust the level of sedation.</li>
<li>Deep sedation and general anesthesia. You will get medications that will make you either almost unconscious or totally unconscious &#8212; deeply asleep &#8212; during the procedure. While you are under general anesthesia, you cannot easily be awakened until the effects of the anesthesia wear off or are reversed with medication.</li>
</ul>',
		),
		'sleep_apnea' => array(
			'title' => 'Sleep Apnea',
			'content' => ' <p>Obstructive sleep apnea is the most common form of apnea. Here&#8217;s information to help you understand how obstructive sleep apnea can affect your life and what can be done about it.</p>
<h3>What Is Sleep Apnea?</h3>
<p>Apnea literally means &#8220;cessation of breath.&#8221; If you have sleep apnea, your breath can become very shallow or you may even stop breathing while you are asleep. This state of not breathing can occur up to hundreds of times a night in some people.</p>
<h3>What Is Obstructive Sleep Apnea?</h3>
<p>Obstructive sleep apnea (OSA) &#8212; also called obstructive sleep apnea syndrome &#8212; occurs when there are repeated episodes of complete or partial blockage of the upper airway during sleep. During a sleep apnea episode, the diaphragm and chest muscles work harder to open the obstructed airway and pull air into the lungs. Breathing usually resumes with a loud gasp, snort, or body jerk. These episodes can interfere with sound sleep. They can also reduce the flow of oxygen to vital organs and cause irregular heart rhythms.</p>
<h3>What Are the Symptoms of Obstructive Sleep Apnea?</h3>
<p>Often the person with obstructive sleep apnea is not the first to recognize the signs. OSA is often first noticed by the bed partner or a person who observes the patient at rest. Many people who have OSA have no sleep complaints.</p>
<p>The most common obstructive sleep apnea symptoms include:</p>
<ul>
<li>Daytime sleepiness or fatigue</li>
<li>Dry mouth or sore throat upon awakening</li>
<li>Headaches in the morning</li>
<li>Trouble concentrating, forgetfulness, depression, or irritability</li>
<li>Night sweats</li>
<li>Restlessness during sleep</li>
<li>Sexual dysfunction</li>
<li>Snoring</li>
<li>Sudden awakenings with a sensation of gasping or choking</li>
<li>Difficulty getting up in the mornings</li>
</ul>
<p>Symptoms of OSA in children may not be as obvious. They include:</p>
<ul>
<li>Bedwetting</li>
<li>Choking or drooling</li>
<li>Excessive sweating at night</li>
<li>Inward movement of the ribcage when inhaling</li>
<li>Learning and behavioral disorders</li>
<li>Poor school performance</li>
<li>Sluggishness or sleepiness (often misinterpreted as laziness in the classroom)</li>
<li>Snoring</li>
<li>Teeth grinding</li>
<li>Restlessness in bed</li>
<li>Pauses or absence of breathing</li>
<li>Unusual sleeping positions, such as sleeping on the hands and knees, or with the neck hyperextended</li>
</ul>',
		),
		'veneers' => array(
			'title' => 'Veneers',
			'content' => '<p>Veneers are thin pieces of durable porcelain custom made in a professional dental laboratory to match the shape and color of a given patient’s teeth. The dentist bonds them to the front of the teeth, creating a beautiful and attractive smile. The ideal solution to many dental conditions, porcelain veneers have the power to completely reshape your teeth and smile.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>Crooked teeth</li>
<li>Misshapen teeth</li>
<li>Severely discolored or stained teeth</li>
<li>Unwanted or uneven spaces</li>
<li>Worn or chipped teeth</li>
<li>Most minor cosmetic flaws</li>
</ul>
<h3>How is the procedure done?</h3>
<p>Getting porcelain veneers usually requires two visits. With little or no anesthesia, the dentist will prepare the teeth by lightly buffing and shaping their surfaces. A mold of the teeth will be taken, and the dentist will help you choose a shade of color fitting to your needs. On the second visit, the dentist will clean your teeth with specialized liquids designed to prepare the teeth for a durable bond. The veneers can then be cemented into place, restoring a bright and vibrant smile.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>At the last appointment, the dentist will give you specific care instructions for the porcelain veneers. Of course, brushing, flossing, and visiting the dentist regularly will help to protect the shining beauty of your new smile. Remember that veneers will provide you with a beautiful smile for many years, but they may eventually need replacement to maintain the same level of quality.</p>',
		),
		'whitening' => array(
			'title' => 'Whitening',
			'content' => '<p>Did you know that having whiter teeth has now become the number one aesthetic concern of most patients? Fortunately, tooth whitening, or bleaching, is an ideal way to brighten your smile using a straight-forward, non-invasive dental treatment. Modern dental technology has developed a simple and highly effective home-based whitening system. Since the system only works on natural tooth enamel, your dentist will be sure to perform any other necessary restoration procedures after the tooth bleaching process is complete so those treatments can be designed to match the coloration of the newly-whitened teeth.</p>
<h3>What can this procedure repair?</h3>
<ul>
<li>An abscess (or pimple) on the gums.</li>
<li>Sensitivity to hot and cold.</li>
<li>Severe toothache pain.</li>
<li>Swelling or tenderness.</li>
</ul>
<h3>What can this procedure repair?</h3>
<ul>
<li>Discoloration caused by Fluorosis (excessive fluoridation during tooth development)</li>
<li>Normal wear of the outer tooth layer</li>
<li>Stained teeth due to medications (tetracycline, etc.)</li>
<li>Yellow and brown stains on teeth</li>
</ul>
<h3>How is the procedure done?</h3>
<p>This procedure generally requires two office visits. At the first appointment, the dentist will create molds of your teeth that will be used to fabricate custom, clear plastic trays. Once the trays are ready, you will be asked to return so the dentist can check for a proper fit and make any necessary adjustments. The patient may then choose to wear the trays either twice a day for thirty minutes, or overnight. The entire process takes about two weeks depending on the degree of staining and the desired level of whitening.</p>
<h3>What kind of follow up care should I expect?</h3>
<p>The dentist will clearly explain the procedure and give care instructions for both your teeth and the whitening trays. Many patients experience tooth sensitivity during the whitening process, but it passes quickly once the treatment period is complete. The effect is not permanent, so a touch-up may be necessary every few years, particularly if you smoke, or drink coffee, tea, or wine. Naturally, brushing, flossing, and regular dental visits will help maintain the beauty of your smile.</p>',
		),
		'dental_implants' => array(
			'title' => 'Dental Implants',
			'content' => '<p>Dental implants provide a permanent solution for missing teeth, relieving the patient from the hassle associated with partial or complete dentures. They are artificial roots and teeth that are custom crafted for your dentition and surgically placed into the jawbone by a dentist or periodontist—a specialist of the gums and supporting bone. Though made of titanium for strength, dental implants look very natural and often enhance the patient’s smile. Strong, stable, and durable, dental implants will last many years, though they sometimes require re-tightening or replacement due to normal wear.</p><p><strong>What can dental implants correct?</strong></p><ul><li>Missing teeth</li><li>Joint pain or bite problems caused by teeth shifting into vacant spaces</li><li>Cosmetic problems with one’s smile</li><li>Problems with chewing, speech, and digestion</li><li>Misaligned facial tissues</li></ul><p><strong>What’s the procedure for getting dental implants?</strong></p><p>Getting dental implants requires a number of visits over several months. The dentist will begin by taking x-rays and impressions, or molds, of the jaw and teeth to gather information about bone tissue, gum tissue, and available spacing for implants. Once the implants are crafted from the molds, the dentist will numb the patient and surgically place them into the bone. Healing and proper bone integration can take up to six months.</p><p>Some implants come with pre-attached posts where others may require a second surgery for placement of the posts that anchor the artificial teeth. Once the posts are in place and the mouth is fully healed, the dentist will mount the artificial teeth. Since adjustment may be necessary, several fitting sessions are often required over the course of one to two months. When tooth alignment is confirmed and healing is complete, the dentist permanently secures the artificial teeth to the implant, providing long-term stability and comfort for the patient.</p><p>The dentist will provide care instructions when the treatment is complete. Good oral hygiene, eating habits, and regular dental visits all aid in the life of your new implants.</p>',
		),
		'dentures' => array(
			'title' => 'Dentures & Partial Dentures',
			'content' => '<p>Dentures are a removable appliance designed to replace missing teeth and their surrounding tissue. They are designed to closely resemble your teeth and serve to complete the overall dental structure of your mouth, supporting both the normal function of your teeth and the natural beauty of your smile. There are two types of dentures: complete and partial. Complete dentures are used when all of the teeth are missing. Partial dentures are used when some natural teeth remain, both filling the spaces left by missing teeth and preventing the remaining teeth from shifting out of place.</p><p>Complete dentures come in two types: conventional and immediate. Conventional dentures are created after the teeth have been removed and the gum tissue has healed; generally a 4 to 6 week process. During this time, the patient must go without teeth, so a set of immediate dentures is prepared in advance and placed right after the teeth are removed. This prevents the patient from having to go without teeth during the healing process. Once healing is complete, a permanent set of conventional dentures can be properly set in place.</p><p><strong>What can this procedure repair?</strong></p><ul><li>Loss of all teeth in an arch</li><li>Loss of several teeth in an arch</li><li>Problems with chewing, speech, and digestion</li><li>Dissatisfaction with the appearance of one\'s smile</li></ul><p><strong>How is this procedure done?</strong></p><p>Getting dentures requires several appointments over the course of several weeks. At your first appointment, the dentist will take precise measurements and create an individually customized mold that will be used to manufacture your “conventional” dentures. You will then be given a set of “immediate” dentures for use while healing takes place and the “conventional” dentures are prepared. Several “try-in” appointments are often necessary along the way to ensure proper shape, color, and fit. At the final appointment, your dentist will precisely adjust and place the completed denture, ensuring a natural and comfortable fit and restoring your teeth to full function.</p><p><strong>What kind of follow up care should I expect?</strong></p><p>Shortly after dentures have been put in place, many patients experience increased saliva flow, mild soreness, and possible problems with speech and chewing. This is a normal reaction, and it will subside quickly as the muscles and tissues of your mouth get used to the new dentures. The dentist will provide detailed care instructions, and it is important to remember that proper cleaning, daily brushing and flossing, and regular dental visits all help to aid in extending the life of your new dentures. They are very durable appliances that will last many years with proper maintenance, but keep in mind that they sometimes have to be remade, repaired, or readjusted due to normal wear.</p>',
		),
		'root_canal' => array(
			'title' => 'Root Canal Therapy',
			'content' => '<p>Root canal therapy is the treatment of choice to save a tooth that would otherwise die as a result of infection or decay that has progressed far enough to reach the tooth’s nerve. Preserving the tooth is ideal because it eliminates the problems that a gap in the dental structure creates for the surrounding teeth—problems that quickly become more and more costly and inconvenient over the course of time.</p><p>In this procedure, the pulp of the tooth (the living tissue inside) is removed and the resulting space is filled with special, medicated, dental materials that restore the tooth to full function. Root canal therapy is a highly successful treatment that usually lasts a lifetime, and, thanks to modern advancements in dental medicine, the procedure is far more comfortable than it has been in the past.</p><p><strong>There are a number of signs that suggest root canal therapy may be necessary:</strong></p><ul><li>An abscess (or pimple) on the gums.</li><li>Sensitivity to hot and cold.</li><li>Severe toothache pain.</li><li>Swelling or tenderness.</li></ul><p><strong>What can this procedure repair?</strong></p><ul><li>Decay that has reached the tooth pulp.</li><li>Infections or abscesses that have developed inside the tooth or at the root tip.</li><li>Injury or trauma to the tooth.</li></ul><p><strong>How is this procedure done?</strong></p><p>Root canal therapy can often be done in one appointment, though more appointments may be necessary. It is normally performed by a dentist or an endodontist, a specialist in root canal therapy. At your appointment, the dentist will numb the tooth and place a rubber dam (a sheet of rubber) around the tooth to keep it dry and free of saliva. The dentist will then create an access opening on the surface of the tooth, allowing for the placement of a series of root canal files. The pulp, nerve tissue, and any bacteria or tooth decay that may be present are then removed with specialized dental tools. After a thorough cleaning, the dentist will seal the tooth with a permanent filling, though a temporary filling may be necessary if additional appointments are required to properly clean and repair the tooth.</p><p>Once the root canal procedure is complete, the dentist will place a temporary crown on the tooth to protect it from breakage. Your regular dentist can then fit the tooth for a permanent crown that will return the tooth to its full, natural function.</p><p>What kind of follow up care should I expect?</p><p>Many patients find that their tooth is sensitive to heat and cold immediately following root canal therapy. This is temporary, and it will subside once the inflammation diminishes and the tooth has healed. The dentist will provide you with care instructions after each appointment throughout the process. It is also important to remember that good oral hygiene at home combined with regular dental visits are the very best way to secure the health and beauty of both your natural teeth and any dental restorations you may have. As with all restorative treatments, teeth restored through root canal therapy can last a lifetime, but may have to be retreated due to new infections.</p>',
		),
		'prevention' => array(
			'title' => 'Cleaning and Prevention',
			'content' => '<p>Our ultimate goal is to secure the safety, health, and beauty of your teeth for a lifetime so you can always smile with confidence. The very best way to achieve this is through an individually tailored prevention program designed through the cooperative effort of the patient, the dentist, and our dental staff.</p>
<p>With the practice of good oral hygiene at home combined with a balanced diet and regular dental visits, we can effectively preserve the natural dentition of your teeth and their supporting structures for years to come. This is the very best way to minimize or eliminate the onset, progress, and recurrence of dental diseases and conditions that can result in serious and costly dental problems. Let us help you maintain a healthy, confident, and beautiful smile.</p>',
		),
		'cleanings' => array(
			'title' => 'Dental Cleanings',
			'content' => '<p><strong>Professional Dental Cleanings:</strong></p><p>Professional dental cleanings, known as dental prophylaxis, are performed by registered dental hygienists. During the cleaning, the hygienist will remove tartar and plaque, and then polish the teeth to remove any remaining stains. The proper removal of both tartar and plaque is essential to dental health and requires the specialized tools and training that dental hygienists provide.</p><p>Tartar, professionally known as calculus, is hardened plaque that sets firmly to tooth surfaces both above and below the gum line. Left in place, it causes serious damage to dental health. Plaque is a sticky film that forms on the teeth. Almost invisible to the naked eye, this growing colony of living bacteria, food debris, and saliva produces toxins that inflame the gums, initiating the beginning stages of periodontal disease. With both of these forming on your teeth all the time, professional dental cleanings are an essential element of dental disease prevention.</p><p><strong>Screenings for General Dental Health:</strong></p><p>Following your dental cleaning, the hygienist and the dentist will go through a series of general diagnostic screenings for a variety of common dental problems:</p><ol><li>Tooth Decay: All tooth surfaces are checked for weaknesses and decay with special dental instruments.</li><li>Oral Cancer Screening: The face, neck, lips, tongue, throat, and gums will be checked for any signs of oral cancer.</li><li>Gum Disease Evaluation: The gums and bones around the teeth will be checked for any signs of periodontal disease.</li><li>Examination of Existing Restorations: Any fillings, crowns, or other existing restorations will be checked for problems or concerns, ensuring that they remain fully functional.</li></ol>',
		),
		'exams' => array(
			'title' => 'Dental Exams',
			'content' => '<p>On your first visit, the dentist will perform a comprehensive dental exam to assess the current condition of your teeth and their supporting dental structures. You will then be asked to return for regular check-up exams to help implement and maintain your individualized dental health plan. Regular check-up exams cover three primary areas:</p><ol><li>Professional Dental Cleanings.</li><li>Screenings for General Dental Health</li><li>Periodic X-Rays &amp; Regular Diagnostic Evaluations of X-Rays</li></ol>',
		),
		'home' => array(
			'title' => 'Home Care',
			'content' => '<p>The first line of defense against dental disease is proper home-care. Your personal home care begins with a combination of eating balanced meals, reducing the number of snacks you eat, and correctly using various home dental aids to help control plaque and bacteria.</p><p><strong>Tooth Brushing:</strong></p><p>Brushing your teeth at least twice a day with an ADA approved soft-bristle brush and toothpaste is vital to the health of your teeth. This is especially important just before going to bed at night. When brushing, follow this procedure:</p><ol style="margin-left: 40px;"><li>Place the brush at a 45 degree angle to the gums and gently brush using a small, circular motion, ensuring that you always feel the bristles on the gums.</li><li>Brush all surfaces of the teeth including the outer, inner, and biting surfaces.</li><li>Clean the inside of the front teeth with the tip of the brush.</li><li>Brush your tongue to remove bacteria and freshen your breath.</li></ol><p>Where possible, we recommend electric toothbrushes which can simplify this process. When using an electric toothbrush, place the bristles on your gums and teeth and turn it on, moving through the mouth several teeth at a time.</p><p><strong>Flossing:</strong></p><p>Flossing daily cleans between the teeth and under the gum line, disrupting plaque colonies that can cause serious damage to the gums, teeth, and bones if they are not cleared away. When flossing, follow this procedure:</p><ol style="margin-left: 40px;"><li>Take 12-16 inches (30-40cm) of dental floss and wrap it around your middle fingers, leaving about 2 inches (5cm) of floss free between them.</li><li>Using the thumbs and forefingers to guide the floss, gently insert it between the teeth and slide it back and forth in a sawing motion.</li><li>Curve the floss into a “C” shape around each tooth and under the gum line. Gently move the floss up and down, cleaning the side of each tooth.</li></ol><p>For those who might struggle with this process, we recommend floss holders.</p><p><strong>Rinsing:</strong></p><p>Many of our patients do not initially realize the importance of rinsing with water not only after brushing, but also after meals when a brush is unavailable. Mouthwashes and other over-the-counter rinsing products can be helpful, but it\'s important to consult your dentist or dental hygienist to determine which products would be best for your individual needs.</p><p><strong>Other Dental Aids:</strong></p><p>As each individual\'s dental health needs are different, the dentist or dental hygienist may suggest the use of other dental aids based on your unique circumstances. Interdental brushes, rubber tip stimulators, tongue cleaners, irrigation devices, fluoride, medicated rinses, and many other options can all play important roles in your dental health. Your dentist or dental hygienist will provide you with proper use instructions for these aids should they find you need them.</p>',
		),
		'britesmile' => array(
			'title' => 'BriteSmile',
			'content' => '<p>Discolored or stained teeth may affect your confidence. While over-the counter whitening strips and whitening toothpaste help remove surface stains to whiten teeth, you typically do not see immediate results. The BriteSmile® Whitening System provides a fast, safe and gentle way to restore your teeth’s natural color by up to 14 shades in one hour. That new brighter smile will have you showing your “pearly whites.”&nbsp;</p><p><strong>Is BriteSmile® right for me?</strong></p><p>If you have healthy, non-sensitive teeth and gums, you are a good candidate for this whitening system. If you have gum disease, thin gum tissue, sensitive teeth or thinning teeth, this may not be a good option for you. In addition, if you have deep natural stains on your teeth, you should carefully consider this option. If you have gum disease, your dentist will need to treat that prior to applying the whitening gel. Your dentist will best assess if this procedure will work for you.</p><p><strong>What types of stains does BriteSmile® work on</strong>?</p><p>BriteSmile® may alleviate:</p><ul><li>Stains caused by tobacco</li><li>Stains caused by strong acidic foods and drinks (e.g., coffee)</li><li>Yellowing teeth caused by aging</li><li>Graying teeth typically caused by hereditary</li><li>Organic stains on the teeth</li></ul><p><strong>Does this procedure take place in a dental office?</strong></p><p>That is up to the patient. If you opt to have the procedure at your dental office, it takes an hour. However, if you prefer to whiten your teeth at home, your dentist provides the toothpaste, dental trays and a less concentrated form of the gel. Your dentist will give you instructions on how to use this method to whiten your teeth at home.&nbsp;</p><p><strong>How does BriteSmile® work?</strong></p><p>BriteSmile® works best on clean, healthy teeth. Your dentist will likely recommend a cleaning prior to whitening your teeth to remove food particles, plaque and tarter. In addition, your dentist will examine your teeth for decay, inflammation or fractures.</p><p>The BriteSmile® gel is applied at three, twenty-minute intervals. Below is the process:</p><ul><li>The dentist places a retractor to fully expose your teeth.</li><li>The dentist places a hardening resin to the gums to prevent bleeding and irritation.</li><li>The dentist applies the gel and blue light to your teeth for twenty minutes.</li><li>The dentist checks your progress.</li><li>The dentist removes the old gel and applies the next round of gel for twenty minutes.</li><li>Once again, the dentist removes the gel and places the final application for twenty minutes.</li><li>Once your gel treatment is complete, the dentist removes the reactor.</li><li>You rinse your mouth and the dentist measures your new tooth color. You may notice that your teeth look very white after treatment because of mild dehydration. You will notice your new color in approximately 48 hours after your teeth have rehydrated.</li></ul><p><strong>Will BriteSmile® cause discomfort?</strong></p><p>Discomfort is unlikely to occur because the gel only contains a 15 to 20 percent concentration of hydrogen peroxide. This is less than comparable brands as they typically contain a 35 to 50 percent concentration of hydrogen peroxide. A higher concentration of hydrogen peroxide dehydrates teeth and may cause them to become hypersensitive. In contrast, BriteSmile® gel balances water and glycerin to keep your teeth hydrated.&nbsp;</p><p><strong>What are the advantages of using BriteSmile®</strong>?</p><p>BriteSmile® has several advantages. Those advantages include:</p><ul><li>The dentist does not have to activate the gel with lasers or heat. This prevents radiation from entering your body.&nbsp;</li><li>BriteSmile® uniformly bleaches teeth.</li><li>BriteSmile® does not create hypersensitive lips, gums or soft tissue.</li><li>The gel has more viscosity. This keeps your teeth moist and prevents them from dehydrating. This leads to longer-lasting results.</li></ul><p><strong>Will my results last?</strong></p><p>Yes! BriteSmile® is a long-lasting whitening treatment. However, stains could rapidly reappear in patients who use tobacco products.</p><p>Your dentist will provide additional information and answer any questions you have regarding this system.</p>',
		),
		'periodontal' => array(
			'title' => 'Periodontal Disease',
			'content' => '<p>The word periodontal means "around the tooth". Periodontal disease is a condition in which forms of bacteria known as plaque and tartar (calculus) have infected the teeth and their supporting gum and bone structures. Plaque is a slick film of food debris, bacteria, and saliva that forms on the teeth all the time as you eat and drink through the day. Plaque becomes tartar when left in place for more than twenty-four hours. The two together actively destroy tooth, gum, and bone tissue. Periodontal disease, characterized by red, swollen, and bleeding gums, is so common that four out of five people have it but remain unaware of it because the disease is usually painless in the early stages.</p><p>In fact, the disease is so common that it is the number one cause of tooth loss. Additionally, current research suggests that the inflammation and bacteria associated with periodontal disease may affect other systemic diseases like stroke, bacterial pneumonia, diabetes, cardiovascular disease, and increased risk during pregnancy. Fortunately, good oral hygiene, a balanced diet, and regular dental visits are easy ways to significantly reduce the risk of developing periodontal disease.</p><ul><li>The following is a list of symptoms that suggest the presence of periodontal disease:</li><li>Bleeding Gums: Gums should never bleed, even with vigorous brushing or flossing.</li><li>Loose Teeth: Often caused by weakened periodontal fibers, the muscle tissue that binds teeth to the bone.</li><li>New Spaces Between Teeth: This may be suggestive of bone loss.</li><li>Persistent Bad Breath: Often caused by too much bacteria in the mouth.</li><li>Tender or Receding Gums: Bacteria can cause an uncomfortable inflammation of the gums, eventually creating a loss of gum tissue around the tooth.</li><li>Pus on Teeth and Gums: Pus is a sign of serious bacterial infection.</li></ul>',
		),
		'diagnosis' => array(
			'title' => 'Periodontal Disease - Diagnosis',
			'content' => '<p>Once your treatment is complete, your dentist and dental hygienist will recommend follow-up periodontal cleanings, usually four times a year. At these appointments, the dental hygienist will clean the teeth of both tartar and plaque that could not be removed at home, protecting the gums and bone structure from further damage. The dentist will also thoroughly check the depth of gum pockets and look for any other signs of the recurrence or progression of periodontal disease.</p><p>During the periodontal cleaning process, the dentist and dental hygienist will also work through the screening process applied in all standard dental cleaning visits, checking carefully for other potential dental problems:</p><ol><li>Tooth Decay: All tooth surfaces are checked for weaknesses and decay with special dental instruments.</li><li>Oral Cancer Screening: The face, neck, lips, tongue, throat, and gums will be checked for any signs of oral cancer.</li><li>Gum Disease Evaluation: The gums and bones around the teeth will be checked for any signs of periodontal disease.</li><li>Examination of Existing Restorations: Any fillings, crowns, or other existing restorations will be checked for problems or concerns, ensuring that they remain fully functional.</li><li>X-Ray Review: Recent dental x-rays will be reviewed to check for bone loss and other hidden problems.</li></ol><p>Finally, it is vitally important to remember that it only take twenty-four hours for plaque to set on your teeth and turn into tartar. Daily home cleaning is absolutely essential to control the formation of the plaque and tartar that lead to periodontal disease. Practicing good oral hygiene and following the recommended schedule of dental cleaning visits is the very best way to maintain strong dental health and eliminate periodontal disease.</p>',
		),
		'extractions' => array(
			'title' => 'Extractions',
			'content' => '<p>A tooth that is severely damaged may need to be removed. A surgeon who specializes in surgeries of the mouth (oral and maxillofacial surgeon) or your dentist can remove a tooth.</p>
<p>Before removing your tooth, your dentist will give you a local anesthetic to numb the area where the tooth will be removed. A stronger, general anesthetic may be used, especially if several or all of your teeth need to be removed. General anesthetic prevents pain in the whole body and will make you sleep through the procedure.</p>
<p>After the tooth is removed, you may need stitches. You can gently bite down on a cotton gauze pad placed over the wound to help stop the bleeding. The removed tooth can be replaced with an implant, a denture, or a bridge. A bridge is a replacement for one or more (but not all) of the teeth and may be permanent or removable.</p>
<h3>What To Expect After Surgery</h3>
<p>In most cases, the recovery period lasts only a few days. The following will help speed recovery:</p>
<ul>
<li>Take painkillers as prescribed by your dentist or oral surgeon.</li>
<li>After 24 hours, rinse your mouth gently with warm salt water several times a day to reduce swelling and relieve pain. Make your own salt water by mixing 1 tsp (5 g) of salt in a medium-sized glass [8 fl oz (237 mL)] of warm water.</li>
<li>Change gauze pads before they become soaked with blood.</li>
<li>Relax after surgery. Physical activity may increase bleeding.</li>
<li>Avoid smoking.</li>
<li>Eat soft foods, such as gelatin, pudding, or a thin soup. Gradually add solid foods to your diet as healing progresses.</li>
<li>Do not lie flat. This may prolong bleeding. Prop up your head with pillows.</li>
<li>Avoid rubbing the area with your tongue.</li>
<li>Continue to carefully brush your teeth and tongue.</li>
</ul>
<p>After the tooth is removed, you may need stitches. Some stitches dissolve over time, and some have to be removed after a few days. Your dentist will tell you whether your stitches need to be removed.</p>
<h3>Why It Is Done</h3>
<p>Removing a tooth is necessary when decay or an abscessed tooth is so severe that no other treatment will cure the infection.</p>',
		),
		'migrane' => array(
			'title' => 'TMD/Migrane',
			'content' => '<p>Temporomandibular disorders (TMD) occur as a result of problems with the jaw, jaw joint and surrounding facial muscles that control chewing and moving the jaw. These disorders are often incorrectly called TMJ, which stands for temporomandibular joint.</p>
<h3>What Is the Temporomandibular Joint (TMJ)?</h3>
<p>The temporomandibular joint (TMJ) is the hinge joint that connects the lower jaw (mandible) to the temporal bone of the skull, which is immediately in front of the ear on each side of your head. The joints are flexible, allowing the jaw to move smoothly up and down and side to side and enabling you to talk, chew, and yawn. Muscles attached to and surrounding the jaw joint control the position and movement of the jaw.</p>
<h3>What Causes TMD?</h3>
<p>The cause of TMD is not clear, but dentists believe that symptoms arise from problems with the muscles of the jaw or with the parts of the joint itself.</p>
<p>Injury to the jaw, temporomandibular joint, or muscles of the head and neck – such as from a heavy blow or whiplash – can cause TMD. Other possible causes include:</p>
<ul>
<li>Grinding or clenching the teeth, which puts a lot of pressure on the TMJ</li>
<li>Dislocation of the soft cushion or disc between the ball and socket</li>
<li>Presence of osteoarthritis or rheumatoid arthritis in the TMJ</li>
<li>Stress, which can cause a person to tighten facial and jaw muscles or clench the teeth</li>
</ul>',
		),
		'wisdom_teeth' => array(
			'title' => 'Wisdom Teeth',
			'content' => '<p>Wisdom teeth are the third and final set of molars that most people get in their late teens or early twenties. Sometimes these teeth can be a valuable asset to the mouth when healthy and properly aligned, but more often, they are misaligned and require removal.</p>
<p>When wisdom teeth are misaligned, they may position themselves horizontally, be angled toward or away from the second molars, or be angled inward or outward. Poor alignment of wisdom teeth can crowd or damage adjacent teeth, the jawbone, or nerves. </p>
<h3>Anatomy of the Teeth</h3>
<p>The teeth are the hardest substances in the human body. Besides being essential for chewing, the teeth play an important role in speech. Parts of the teeth include:</p>
<ul>
<li>Enamel: The hardest, white outer part of the tooth. Enamel is mostly made of calcium phosphate, a rock-hard mineral.</li>
<li> Dentin: A layer underlying the enamel. Dentin is made of living cells, which secrete a hard mineral substance.</li>
<li> Pulp: The softer, living inner structure of teeth. Blood vessels and nerves run through the pulp of the teeth.</li>
</ul>
<p>Wisdom teeth also can be impacted &#8212; they are enclosed within the soft tissue and/or the jawbone or only partially break through or erupt through the gum. Partial eruption of the wisdom teeth allows an opening for bacteria to enter around the tooth and cause an infection, which results in pain, swelling, jaw stiffness, and general illness. Partially erupted teeth are also more prone to tooth decay and gum diseas,e because their hard-to-reach location and awkward positioning makes brushing and flossing difficult.</p>
<h3>How Do I Know if I Have Wisdom Teeth?</h3>
<p>Ask your dentist about the positioning of your wisdom teeth. He or she may take an X-ray periodically to evaluate for the presence and alignment of your wisdom teeth. Your dentist may also decide to send you to an oral surgeon for further evaluation.</p>
<p>Your dentist or oral surgeon may recommend that your wisdom teeth be extracted even before problems develop. This is done to avoid a more painful or more complicated extraction that might have to be done a few years later. Removal is easier in young people, when the wisdom teeth roots are not yet fully developed and the bone is less dense. In older people, recovery and healing time tend to be longer.</p>
<h3>How Are Wisdom Teeth Removed?</h3>
<p>The relative ease at which your dentist or oral surgeon can extract your wisdom teeth depends on their position and stage of development. Your oral health care provider will be able to give you an idea of what to expect during your pre-extraction exam. A wisdom tooth that is fully erupted through the gum can be extracted as easily as any other tooth. However, a wisdom tooth that is underneath the gums and embedded in the jawbone will require an incision into the gums and then removal of the portion of bone that lies over the tooth. Often, for a tooth in this situation, the tooth will be extracted in small sections rather than removed in one piece to minimize the amount of bone that needs to be removed to get the tooth out.</p>
<h3>What Happens During Wisdom Teeth Removal?</h3>
<p>Before your wisdom teeth are pulled, the teeth and the surrounding tissue will be numbed with a local anesthetic &#8212; the same type used to numb a tooth prior to having a cavity filled. In addition to the local anesthetic to numb the pain, you and your dentist or oral surgeon may decide that a sedative is desired to control any anxiety. Sedating medications that could be selected include: nitrous oxide (otherwise known as &#8220;laughing gas&#8221;), an oral sedative (for example, Valium), or an intravenous sedative (administered via an injection into your veins). If nitrous oxide is given, you will be able to drive yourself home. If any of the other medications is selected, you will need someone to drive you both to and from the appointment.</p>',
		),
	);
	
	
	foreach($services as $service) {
		
		$page = array();
		$page['post_title'] = $service['title'];
		$page['post_content'] = $service['content'];
		$page['post_status'] = 'publish';
        $page['post_type'] = 'services';
        $page['comment_status'] = 'closed';
        $page['ping_status'] = 'closed';
		$the_page_id = wp_insert_post( $page );
		
	}
	
	
}

?>