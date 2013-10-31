<?php
/**
 * Template Name: Practice Areas
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div id="intro" class="row" role="practice">
	<div class="inner">
		<ul class="slides">
			<li style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/profile.png);">
			</li>
		</ul>
	</div>
</div>
	<div id="primary" class="content-area" role="practice">
		<div id="primary-border"></div>
		<div id="primary-bg"></div>
		<div id="content" class="site-content" role="main">
			<div id="chat">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chat.png" alt="alt text">
			</div>
			<aside class="col-sm-4">
				<div class="areas col-sm-5">
					<h5>Practice Areas</h5>
					<?php subnav(7); ?>
					<!-- <ul>
						<li data-height="" class="active">Personal Injury &amp; Offshore Accidents <span></span></li>
						<li data-height="">Medical Malpractice <span></span></li>
						<li data-height="">Truck &amp; Auto Accidents <span></span></li>
						<li data-height="">Class Action <span></span></li>
						<li data-height="">Civil Rights &amp; Employment <span></span></li>
					</ul> -->
					<div class="contact-form">
						<img src="<?php echo get_template_directory_uri(); ?>/img/form-box.png" alt="alt text">
					</div>
				</div>
				<div class="featured col-sm-7">
					<img src="<?php echo get_template_directory_uri(); ?>/img/areas-featured.png" alt="alt text">
				</div>
			</aside>
			<div class="col-sm-8 content-section">
				<header>
					<h4 class="fancy"><span><?php the_title(); ?></span></h4>
				</header>
				<div class="content clearfix">
					<div class="col-sm-6">
						<h5>Statutes of Limitations</h5>
						<p>A medical malpractice action for injury or death must be filed within one year from the date of the alleged act, omission, or neglect, or within one year from the date of discovery of the alleged act, omission, or neglect. In no event may such claims be filed more than three years from the date of the alleged act, omission, or neglect. Id. In Whitnell v. Silverman, 686 So. 2d 23 (La. 1996), the Louisiana Supreme Court overruled a lower court holding that the three-year period was unconstitutional. However, it declined to consider whether the statute might be unconstitutional if applied to bar a lawsuit by a person with a disease with a latency period of more that three years, because plaintiff did not have such a disease and so lacked standing to raise the argument.</p>
						<p>A wrongful death action must be brought within one year from the death of the decedent. La. Civ. Code Ann. art. 2315.2 (West 1997). There is conflict among the appellate courts over whether § 9:5628 applies to wrongful death cases involving medical malpractice. Taylor v. Giddens, 618 So. 2d 834 (La. 1993).</p>
						<h5>Contributory or Comparative Negligence</h5>
						<p>Louisiana has adopted the doctrine of pure comparative negligence. In all cases except those of intentional tort, a claimant's recovery is reduced by his percentage of fault. In order to determine his percentage of fault, the fault of all other persons who contributed to the injury is considered, whether or not they are parties. La. Civ. Code Ann. art. 2323 (West 1997).</p>
						<h5>Joint and Several Liability</h5>
						<p>Effective April 6, 1996, a joint tortfeasor is not liable for more than his degree of fault and is not jointly liable with any other person for damages attributable to the fault of such person. La. Civ. Code Ann. art. 2324 (West 1997). Before the amendment, joint liability was permitted to the degree necessary to ensure that the claimant recovered 50 percent of the judgment.</p>
						<h5>Contribution</h5>
						<p>Formerly, language in La. Civ. Code Ann. art. 2324(B) (West 1997) specifically stated that all parties enjoyed the right of contribution under this article. This language was dropped effective April 6, 1996, with the adoption of the amendment discussed above in Joint and Several Liability, and presumably is unnecessary because no tortfeasor will be required to pay damages attributable to the fault of another. However, other articles continue to provide that each tortfeasor is liable in contribution for his proportionate share of the fault. La. Code Civ. Proc. Ann. art. 1804 (West 1991). Contribution may be pursued by means of a third-party complaint in the original lawsuit. La. Code Civ. Proc. Ann. art. 1805 (West 1987).</p>
						<h5>Vicarious Liability</h5>
						<p>The predominant theory used in Louisiana to assert vicarious liability against hospitals is actual agency, as demonstrated by control, rather than apparent agency. The relevant factors Louisiana courts use in determining whether an agency relationship exists between a hospital and its independent contractor are (a) whether the hospital controlled and supervised the professional medical judgment of its alleged agent, (b) whether the hospital provided and maintained the equipment used by its alleged agent, (c) whether the hospital billed and collected payments for the alleged agent, (d) whether the hospital provided its alleged agent with malpractice and workers' compensation insurance, and (e) what did the contract between the hospital and its alleged agent provided. Royer v. St. Paul Fire &amp; Marine Insurance Co., 502 So. 2d 232 (La. Ct. App.), cert. denied, 503 So. 2d 496 (La. 1987).</p>
						<h5>Expert Testimony</h5>
						<p>As discussed below in Patient Compensation Funds and Physician Insurance, most Louisiana claims are brought against qualified health care providers under the Louisiana Medical Malpractice Act. These cases are subject to screening by a medical review panel consisting of one (nonvoting) lawyer and three physicians. La. Rev. Stat. Ann. § 40:1299.47 (West 1992 &amp; Supp. 1997). The sole duty of the medical review panel is to determine whether the evidence supports the conclusion that the defendant acted or failed to act within the appropriate standard of care and, if the standard was not met, whether the failure contributed to the injury. Id. The panel's report is considered expert opinion and is admissible as evidence in any action subsequently brought by the claimant in a court of law (although it is not conclusive). A party may call any member of the panel as a witness. Id.</p>
						<h5>Damage Caps</h5>
						<p>There is no damage cap applicable to those not insured by the state, but qualified health care providers have their liability limited to $100,000, as described in Patient Compensation Funds and Physician Insurance. Punitive damages are not recoverable in Louisiana, except as specifically authorized by statute. Billiot v. B.P. Oil Co., 645 So. 2d 604 (La. 1994).</p>
					</div>
					<div class="col-sm-6">
						<h5>Statutory Cap on Attorneys' Fees</h5>
						<p>Louisiana does not place a limit on the amount of fees a claimant's attorney may receive for services rendered in a medical malpractice action.</p>
						<h5>Periodic Payments</h5>
						<p>In medical malpractice actions brought pursuant to the Medical Malpractice Act, discussed in Patient Compensation Funds and Physician Insurance, amounts paid by the state for future medical care and related costs are paid by the Patient's Compensation Fund as incurred. La. Rev. Stat. Ann. § 40:1299.43(A) (West 1992).</p>
						<h5>Collateral Source Rule</h5>
						<p>Louisiana follows the collateral source rule, which provides that a tortfeasor may not benefit, and an injured plaintiff's recovery may not be diminished, because of benefits received by the plaintiff from other sources. Frederick v. Woman's Hospital, 626 So. 2d 467 (La. Ct. App. 1993), cert. denied, 633 So. 2d 169 (La. 1994).</p>
						<h5>Pre-judgement Interest</h5>
						<p>Pre-judgment interest is awarded in tort actions from the date of judicial demand until judgment. La. Rev. Stat. Ann. § 13:4203 (West 1991).</p>
						<h5>Patient Compensation Funds and Physician Insurance</h5>
						<p>The Louisiana Medical Malpractice Act established a Patient's Compensation Fund. La. Rev. Stat. Ann. § 40:1299.44 (West 1992 &amp; Supp. 1997). State health care providers are automatically entitled to be covered by the fund. La. Rev. Stat. Ann. § 40:1299.38 (West 1992). Private health care providers may join the fund if they file proof that they are covered by a policy of malpractice liability insurance in an amount of at least $100,000 per claim and pay the surcharge assessed by the Louisiana Insurance Rating Commission. La. Rev. Stat. Ann. §§ 40:1299.42 (West 1992) and 40:1299.44 (West 1992 &amp; Supp. 1997).</p>
						<p>The liability of each qualified health care provider is limited to $100,000 plus interest per patient per incident. La. Rev. Stat. Ann. § 40:1299.42 (West 1992). Judgments, settlements, or binding arbitration orders in excess of $100,000 per provider are paid out of the fund. Id. The claimant's total recovery is limited to $500,000 plus future medical costs. Id. Future medical costs are paid as incurred from the Patient's Compensation Fund. La. Rev. Stat. Ann. § 40:1299.44 (West 1992 &amp; Supp. 1997).</p>
						<p>The Louisiana Supreme Court has held that the limit on damages of $500,000 plus future medical costs is constitutional. Butler v. Flint Goodrich Hospital of Dillard University, 607 So. 2d 517 (La. 1992), cert. denied, 508 U.S. 909 (1993). In particular, the Butler decision upholds the $100,000 limit of each qualified health care provider, and makes it clear that such providers have no excess obligation after the payment of the excess up to $500,000 by the state. The opinion includes a review of prior cases holding other parts of the Medical Malpractice Act to be constitutional. Id.</p>
						<h5>Immunities</h5>
						<p>Neither Louisiana nor its political subdivisions are immune from damages arising from medical malpractice. La. Rev. Stat. Ann. §§ 39:1538 and 39:1539(West 1989). Their liability is, however, limited to the dollar amounts provided under the Medical Malpractice Act.</p>
						<p>No state health care provider or its employees acting within the scope and course of their duties may be held liable for medical malpractice in excess of $500,000 (costs, interest, and future medical care in addition). La. Rev. Stat. Ann. § 40:1299.39 (West 1992). The term "state health care provider" is defined as the state and state entities but such term expressly excludes political subdivisions. Id. Future medical costs are paid from a separate fund without regard to the $500,000 limit. Id. Medical malpractice actions against the state must first be reviewed by a state medical review panel, and the findings are admissible in any future civil action. La. Rev. Stat. Ann. § 40:1299.39.1 (West 1992). The terms applicable to governmental entities substantially parallel those for private qualified health care providers discussed in Patient Compensations Funds and Physician Insurance.</p>
						<h5>Arbitration</h5>
						<p>Arbitration is allowed but not mandated by the Medical Malpractice Act. La. Rev. Stat. Ann. § 40:1299.47(A) (West 1992 &amp; Supp. 1997). Medical patients may, without court approval, enter into binding medical arbitration agreements. La. Rev. Stat. Ann. § 40:1299.57 (West 1992).</p>
						<p>Under the Act, all malpractice claims against qualified health care providers, other than claims validly submitted to arbitration, must be reviewed by a medical review panel. La. Rev. Stat. Ann. § 40:1299.47 (West 1992 &amp; Supp. 1997). The procedure is discussed above in Expert Testimony.</p>
					</div>
				</div><!-- content -->
				<section class="footer">
					<h5>If you or a loved one is in need of legal assistance please CONTACT US NOW.</h5>
					<div class="row">
						<div class="col-sm-6">
							<div class="button orange">
								<h5>Call Us</h5>
								<p>1-877-234-7573</p>
							</div><!-- button -->
						</div>
						<div class="col-sm-6">
							<div class="button orange">
								<h5>Fill Out Our</h5>
								<p>Contact Form</p>
							</div><!-- button -->
						</div>
					</div><!-- row -->
					<span>The initial consultation is free of charge, and if we agree to accept your case, we will work on a contingent fee basis, which means we get paid for our services only if there is a monetary award or recovery of funds.</span>
				</section>
				<section class="bottom">
					<p class="col-sm-12">Don't delay! You may have a valid claim and be entitled to compensation for your injuries, but a lawsuit must be filed before the statute of limitations expires.</p>
				</section>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>