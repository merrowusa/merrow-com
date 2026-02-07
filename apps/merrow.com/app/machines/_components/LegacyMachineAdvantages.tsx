// @version legacy-machine-advantages v2.0
// Legacy overlock advantage block ported from widget_merrow_overlock_advantage.php.

interface LegacyMachineAdvantagesProps {
  machineName: string;
}

function escapeHtml(value: string): string {
  return value
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/\"/g, "&quot;")
    .replace(/'/g, "&#39;");
}

export function LegacyMachineAdvantages({ machineName }: LegacyMachineAdvantagesProps) {
  const safeMachineName = escapeHtml(machineName);

  const html = `
<div class="clear"></div>
<div style="font-size:28px;line-height:30px;color:#4a4a4a;">Merrow Machine Advantages</div>
<div style="border-bottom:1px solid #bdbdbd;margin-top:4px;"></div>
<div style="width:100%;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">HERITAGE</div><br clear="all"/>
Since 1838 Merrow has manufactured the world's best overlock sewing machines. A Merrow Machine is built to sew a more precise stitch and operate longer than any other competitive sewing machine in its class.
Merrow Machines are engineered and manufactured more carefully, designed to last decades, and supported with a network of 156 agents in 65 countries. The Merrow Sewing Machine is The Most PRECISE and TOUGHEST sewing machine manufactured in the world

<br />
<br />
Overlock stitching was invented by the Merrow Machine Company in 1881. Merrow's original three-thread overedge sewing machine is the forerunner of contemporary overlocking machines. Over time, the Merrow Machine Company pioneered the design of new machines to create a variety of overlock stitches, such as two, and four-thread sergers, the one-thread butted seam, and the cutterless emblem edger. Today Two- and three-thread formations are also known as "merrowing". <br /><br />In 2010 Merrow Machines are engineered and built in Fall River, MA.
<br clear="all"/>
<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">DURABILITY:</div><br clear="all"/>

<b>Quality of Materials</b><br clear="all"/>
Our parts and machines are handcrafted and handbuilt
<br clear="all"/><br clear="all"/>
<b>Cams NOT pistons -- Proprietary Cam Technology - Different from all other Sewing Machines</b><br clear="all"/>
We're the only manufacturer in the world building Cam-driven sewing machines that stand up to heavy use. Merrow's Cam-driven machines produces a superior quality stitch. Using sophisticated 5-axis computerized milling machines, we've succeeded in developing proprietary high-technology components offering faster, quieter, operation and remarkable durability.
<br clear="all"/><br clear="all"/>
<b>Merrow Cams are Machined to Exacting Dimensions</b><br clear="all"/>Tolerances are held to .001: the tightest in the industry. They have been designed to operate continuously between 2200 and 5500 RPM. Merrow Cams allow a Merrow Machine to create a perfect stitch while ensuring that the sewing machine will last a lifetime.
<br clear="all"/><br clear="all"/>
<img src="https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/productpages/cams400pxw_1.jpg" alt="Merrow cam technology" width="900" height="345" style="max-width:900px;width:100%;height:auto;"/>
<div style="max-width:900px;">
<ol>
<b>Special consideration should be paid to the intricacies of Merrow's Cam Technology:</b><br clear="all"/>
<li>The Cam groove width and the final surface finish of the Cam groove are created with proprietary manufacturing technology that allows all sides of Merrow's Cam to have an equal, highly polished and uniform steel surface, this results in an approximate coefficient of friction, when lubricated, of .06 or lower.</li>
<li>Cam gear teeth are cut to a unique specifications with the sides of each tooth shaved to create a proprietary profile. This reduces heat when running.</li>
<li>Hardness and metallurgy of the Cams are continuously modified, improving the durability of the Cam. The benchmark for the durability of a Merrow Cam in continuous operation is more than 30 years of operation without failure.</li>
</ol>
</div>
<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">VERSATILITY (for OVERLOCK SEWING):</div><br clear="all"/>
<b>Sew thousands of different Material Types</b><br clear="all"/>
Woven Fabric, Knit Fabric, Terry Towel, Denim, Technical Textiles AND Nonwovens. While the machines sew exceptionally on mid-weight woven fabrics, it performs well on a huge number of materials from vulcanized rubber to fiberglass to insulation.<br clear="all"/><br clear="all"/>
With more than 645 different needle plates and feed dogs, we can modify the stitch to accommodate more demanding fabrics<br clear="all"/><br clear="all"/>

<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">MERROW Will Build you a CUSTOM MACHINE at NO EXTRA COST</div><br clear="all"/>
<br clear="all"/><b>STEP 1: Send us your Material</b><br clear="all"/>
We will build out a custom machine, at no charge, and sew your material off on the ${safeMachineName} (or other machine if appropriate). If you would like a video of the process we will provide this along with the sewn sample.
<p><strong>CONTACT MERROW FOR MORE INFORMATION ABOUT CUSTOM STITCH SAMPLES</strong><br><a href="mailto:sales@merrow.com" style="color:#808080;">email: sales@merrow.com</a><br>phone: 508.689.4095<br>fax: 508.689.4098</p>
<br clear="all"/><b>STEP 2: We will put you in contact with one of our 156 service providers in 65 countries</b><br clear="all"/>
We will send the completed stitch sample to them, and they will assist you with the purchase and installation of the Merrow ${safeMachineName}
<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">MERROW parts can be Replaced</div><br clear="all"/>
<b>Availability of Spare Parts</b><br clear="all"/>
Merrow maintains an inventory of SPARE PARTS for all Merrow Sewing Machines for almost all legacy machines (600 models), ALL Parts are available immediately
<br clear="all"/><br clear="all"/><b>Spare Parts QC is Rigorous</b><br clear="all"/>
You can depend on the parts Merrow provides as all Genuine Parts are machined to very specific tolerances and tested before shipping
<div class="clear"></div>
<br clear="all"/><br clear="all"/>
<div style="font-size:28px;line-height:30px;color:#4a4a4a;">Sales, Support and Service</div>
<div style="border-bottom:1px solid #bdbdbd;margin-top:4px;"></div>
<p>Merrow sells and services all products through a network of sales agents around the world. With 165 agents in 65 countries we are confident that you will find local support. Please feel free to call us directly for product information and stitch samples</p><br clear="all"/>
<div style="font-size:22px;line-height:24px;color:#4b4b4b;">SALES</div><br clear="all"/>
<div>
<a href="/agentmap.html">
<img src="https://pub-8a8d2bb929a64db2b053e893f4dcb4d0.r2.dev/2010_landingpage/agentmap.png" width="646" height="309" alt="merrow agent map" style="max-width:646px;width:100%;height:auto;"/>
</a>
</div>
<div class="clear"></div>
<br clear="all"/>
<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">SUPPORT</div>
<b>Local Support in 65 Countries</b>
Contact us directly to find a local agent to setup your Merrow Machine or train your operators
<br clear="all"/><br clear="all"/><b>The Best Service Website in the Industry</b><br clear="all"/>
Enjoy free access to our <a href="/support" style="color:#808080;">support online</a>, our <a href="/support/class/key/mediakeyword/70d3b2" style="color:#808080;">interactive parts guide</a> and <a href="/support/class/70/key/setup" style="color:#808080;">detailed operation instructions</a>.
<div style="width:100%;border-top:1px dashed #999999;margin:18px 0;height:1px;overflow:hidden"></div><br><div style="font-size:22px;line-height:24px;color:#4b4b4b;">SERVICE</div>
<br clear="all"/><b>Factory Service Program</b><br clear="all"/>
To make replacing parts and servicing your machine as easy as possible, Merrow has a factory service program with a fixed $299 fee and FREE SHIPPING.
Should your machine need service, we will ship you a box to send us your machine in, replace the needle, loopers, cutters and any other worn parts upon
receipt, and ship it back to you. To learn more, call us at +001 508 689 4095
`;

  return (
    <section className="text-[12px] leading-[14px] text-[#4a4a4a]">
      <div dangerouslySetInnerHTML={{ __html: html }} />
    </section>
  );
}
