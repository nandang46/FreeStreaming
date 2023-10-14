<?php 
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
include('header.php');?>
<div id="main">
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">DMCA Policy</h1>
			</header>
	<div class="page-content">
			<p><?php echo $url_dmca;?> respects the intellectual property of others.</p>
			<p><?php echo $url_dmca;?> takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.</p>
			<p>It should be noted that <?php echo $url_dmca;?> is a simple search engine of videos available at a wide variety websites.</p>
			<p>Any videos shown on websites are the responsibility of those sites and not movietvstream.com.</p>
			<p>We have no knowledge of whether content shown on websites is or is not authorized by the content owner as that is a matter between the host site and the content owner.</p>
			<p><?php echo $url_dmca;?> does not host any content on its servers or network.</p>
			<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA).</p>
			<p>For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement: A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law" A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed" The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>
			<p>Attn: DMCA Office Contact Us : <a href="contact.php">Contact</a></p>
			<p>WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER'S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION.</p>
			<p>YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>
			<p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>
	</div>
			<footer class="page-footer"></footer>
		</article>
	</section>
</div>
																						</div>
																						<div id="dmca-modal" class="modal fade">
<div class="modal-dialog">
	<div class="modal-content">
		<form id="dmca-form" method="POST" action="/dmca/">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="text-center">
					<strong>DMCA Notice</strong>
				</h3>
			</div>
			<div class="modal-body">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon1">
						<span class="icon-user"></span>
					</span>
					<input type="text" class="form-control required" name="dmca-name" placeholder="Real Name" aria-describedby="sizing-addon1" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">
							<span class="icon-envelope"></span>
						</span>
						<input type="text" class="form-control required" name="dmca-email" placeholder="Valid Email Address" aria-describedby="sizing-addon2" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3">
								<span class="icon-link"></span>
							</span>
							<input type="text" class="form-control required" name="dmca-url" placeholder="Infringing Material URL" aria-describedby="sizing-addon3" required>
							</div>
							<div class="input-group">
								<textarea class="form-control required" name="dmca-claim" rows="5" placeholder="Claim..." required></textarea>
							</div>
							<div class="input-group">
								<div class="checkbox">
									<label>
										<input class="required" type="checkbox" name="dmca-agree" required> I have read and agree with 
											<strong>Privacy</strong> and 
											<strong>DMCA Policy</strong>
										</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
									<button class="btn btn-primary" name="dmca-submit" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<div id="player-modal" class="modal fade nocontext">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center"> <?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?> LIVE STREAMING</div>
			<div class="modal-body">
				<img class="img-responsive" src="/images/pop.png" width="780" height="439" alt="Aquaman">
					<span class="img-cover"></span>
					<span class="offerlay ease"></span>
					<span class="modal-text ease">Join the network of satisfied members and try this service for 
						<strong>Free.</strong> Fill out the signup form and 
						<strong>start watching instantly.</strong>
					</span>
					<div class="modal-ft ease">
						<ul>
							<li>
								<span class="icon icon-film"></span> Unlimited Access
							</li>
							<li>
								<span class="icon icon-magnifier"></span> Search for Anything
							</li>
							<li>
								<span class="icon icon-ban"></span> Ads Free
							</li>
							<li>
								<span class="icon icon-screen-desktop"></span> All Platforms
							</li>
						</ul>
					</div>
				</div>
				<div class="modal-footer">
					<div class="text-center">
						<button class="btn btn-warning btn-lg btn-responsive" onclick="window.location.href='/sign-in.php?match=<?php echo '' . htmlspecialchars($_GET["live"]) . ''; ?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Sign In
						</button>
						<button class="btn btn-success btn-lg btn-responsive" onclick="window.location.href='<?php echo $offer_serie_a;?>'">
							
								<span class="icon icon-arrow-right-circle"></span>
							</span> Create Free Account
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php');?>