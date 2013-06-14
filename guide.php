<?php
/*
Template Name: Guide
*/
?>

<?php get_header(); ?>
	

	  <!-- Example row of columns -->
	  <div class="row first">
		<div class="span-full">
		  <h2>Guide</h2>
<p>Software release at NASA is governed by <a href="http://nodis3.gsfc.nasa.gov/displayDir.cfm?t=NPR&c=2210&s=1C">NPR 2210.1C</a>.  NPR 2210.1C establishes the roles, responsibilities, and procedures for reporting, reviewing, and releasing software under various conditions, including open source. Every center has a Software Release Authority (SRA). The SRA processes requests for software release and coordinates legal, export control, IT security, 508 compliance, and software engineering standards compliance reviews. Projects hoping to release software should contact their SRA early to discuss their goals and begin the reporting, review, and release process.</p>
<p>The center SRAs are as follows:
</p>
<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      $(document).ready(function() 
    { 
        $("#sra").tablesorter(); 
    } 
); 
    </script>
<table id='sra' class="bordered-table zebra-striped">
	<thead>
		<th>Center</th>
		<th>Name</th>
		<th>Title</th>
		<th>Phone</th>
		<th>Email</th>
	</thead>
	<tbody>
	<tr>
		<td>ARC</td>
		<td>Martha Del Alto</td>
		<td>SRA</td>
		<td>650.604.4865</td>
		<td>martha.e.delalto@nasa.gov</td>
	</tr>
	<tr>
		<td>ARC</td>
		<td>Kim Chrestenson</td>
		<td>SRA Alternate</td>
		<td>650.604.5063</td>
		<td>kim.l.chrestenson@nasa.gov</td>
	</tr>
	<tr>
		<td>DFRC</td>
		<td>Earl Adams</td>
		<td>SRA</td>
		<td>661.276.5307</td>
		<td>earl.s.adams@nasa.gov</td>
	</tr>
	<tr>
		<td>DFRC</td>
		<td>Samantha Hull</td>
		<td>SRA Alternate</td>
		<td>661.276.3368</td>
		<td>samantha.m.hull@nasa.gov</td>
	</tr>
	<tr>
		<td>GRC</td>
		<td>Kim Dalgleish-Miller</td>
		<td>SRA</td>
		<td>216.433.8047</td>
		<td>kimberly.a.dalgleish@nasa.gov</td>
	</tr><tr>
		<td>GRC</td>
		<td>Jason Hanna</td>
		<td>SRA Alterante</td>
		<td>216.433.6731</td>
		<td>jason.m.hanna@nasa.gov</td>
	</tr><tr>
		<td>GSFC</td>
		<td>Nona K. Cheeks</td>
		<td>SRA</td>
		<td>301.286.5810</td>
		<td>nona.k.cheeks@nasa.gov</td>
	</tr><tr>
		<td>GSFC</td>
		<td>Enidia Santiago-Arce </td>
		<td>SRA Alternate</td>
		<td>301.286.8497</td>
		<td>enidia.santiago-arce@nasa.gov</td>
	</tr><tr>
		<td>HQ</td>
		<td>Liteshia Dennis</td>
		<td>SRA</td>
		<td>202.358.4778</td>
		<td>liteshia.b.dennis@nasa.gov</td>
	</tr><tr>
		<td>JPL</td>
		<td>Brian Morrison</td>
		<td>SRA</td>
		<td>818.354.2458</td>
		<td>brian.a.morrison@jpl.nasa.gov</td>
	</tr><tr>
		<td>JSC</td>
		<td>Arlene Andrews</td>
		<td>SRA</td>
		<td>281.483.4730</td>
		<td>jane.i.fox@nasa.gov</td>
	</tr><tr>
		<td>JSC</td>
		<td>Kathy Acuna</td>
		<td>SRA Alternate</td>
		<td>281.483.2066</td>
		<td>kathryn.y.acuna@nasa.gov</td>
	</tr>
	<tr>
		<td>KSC</td>
		<td>Roger Liang</td>
		<td>SRA</td>
		<td>321.861.2224</td>
		<td>roger.h.liang@nasa.gov</td>
	</tr>
	<tr>
		<td>KSC</td>
		<td>Lew Parrish</td>
		<td>SRA Alternate</td>
		<td>321.867.5033</td>
		<td>lewis.m.parrish@nasa.gov</td>
	</tr>
	<tr>
		<td>LaRC</td>
		<td>Stuart Pendleton</td>
		<td>SRA</td>
		<td>757.864.2943</td>
		<td>stuart.e.pendleton@nasa.gov</td>
	</tr><tr>
		<td>MSFC</td>
		<td>Danny Garcia</td>
		<td>SRA</td>
		<td>256.544.4138</td>
		<td>danny.garcia-1@nasa.gov</td>
	</tr>
	<tr>
		<td>MSFC</td>
		<td>Carolyn McMillian</td>
		<td>SRA Alternate</td>
		<td>256.544.9151</td>
		<td>carolyn.e.mcmillan@nasa.gov</td>
	</tr>
	<tr>
		<td>SSC</td>
		<td>John Lansaw</td>
		<td>SRA Alternate</td>
		<td>228.688.1962</td>
		<td>john.lansaw-1@nasa.gov</td>
	</tr>
	</tbody>
</table>
<p>One initiates the software review process by reporting the software as described in NPR 2210.1C (e.g., submitting a description of the software to be released, the individuals involved in its creation, development timeline, available documentation, and related topics). Depending on center procedures, this information may be captured through the <a href="https://ntr.ndc.nasa.gov/">NASA Technology Reporting System</a> or standard form NF1679. Contact your SRA for the specific procedure used at your center.</p>

<p>Each piece of software is unique, and must be reviewed on a case-by-case basis. Generally speaking, however, the review process will address the following considerations:</p>
<ul class="black">
<li><b>Legal.</b>  It is important to ensure that NASA has appropriate rights in software, including subcomponents, before NASA releases that material outside the agency.  Software is rarely developed in isolation.  If your project uses external dependencies, you must provide details about such packages or sources when you report your software.  (See NPR 2210.1C, Chapter 2 for details on reporting software.) The terms and conditions governing external software impact NASA’s right to use and release software, and must be thoroughly analyzed before NASA can release software incorporating that external software. NASA attorneys will also help identify the set of terms and conditions that should govern a particular piece of software when NASA releases it. Per current NASA policy, NASA releases open source software under the NASA Open Source Agreement (NOSA) unless external Open Source Software incorporated into the NASA Open Source Software requires use of a different open source license or unless approved by Center Patent or IP Counsel. Such determinations must be made by your center intellectual property counsel before NASA may release the software in question. </li>
<li><b>Export Control.</b>  The Export Administration Regulations (EAR) and the International Traffic in Arms Regulations (ITAR), among other laws and policies, restrict which NASA technology may be publicly disclosed. Software falling within the scope of these laws or policies cannot be released open source, and may be subject to release restrictions. Your local export control staff can help you determine whether export control laws apply to your technology.</li>
<li><b>IT Security.</b>   Generally speaking, released software should not contain any information peculiar to NASA, such as user names, passwords, database credentials, IP addresses, host names, firewall and network information, or any other data which would expose or create vulnerabilities. Your SRA and IT Security staff will help you understand the types of risks occasioned by software release, and will work with you to remove elements of your software which may give rise to a vulnerability prior to release.</li>
<li><b>508 Compliance.</b>   When developing, procuring, maintaining, or using Electronic and Information Technology (EIT), Federal agencies must ensure that Federal employees with disabilities have access to and use of information and data that is comparable to that for other employees.</li>
<li><b>Software Engineering Requirements.</b>   NASA has established formal software engineering requirements in <a href="http://www.google.com/url?q=http%3A%2F%2Fnodis3.gsfc.nasa.gov%2FdisplayDir.cfm%3Ft%3DNPR%26c%3D7150%26s%3D2&sa=D&sntz=1&usg=AFQjCNHWP78Q1yr8fiXi8pv-q9M2LSMpUw">NPR 7150.2A</a>.  These requirements govern all software development activities and must be followed throughout a project’s development life cycle. As part of the software release process, your center SRA and Engineering Technical Authority for software will work with you to verify (or establish) your software classification and ensure compliance with the corresponding engineering requirements prior to release. For this area of inquiry in particular it is best to front-load compliance by adhering to the software engineering requirements with a documented compliance matrix from the outset. Otherwise, you may incur significant delay and expense in obtaining compliance prior to release.</li>
</ul>
<p>Depending on the number of projects being assessed for release at any given time general workloads and backlogs, traversing the release process can take anywhere from 3 to 6 months. The process may take longer for complex or novel release requests. Be sure to factor these time tables (with consultation with your SRA) into your project schedules.</p>
		</div>
	  </div>
	<?php get_footer(); ?>
