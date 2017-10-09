<?php
  include( 'includes/global_assets.php' );
  wp_enqueue_style( 'marital-rape', get_template_directory_uri(). '/features/assets/css/maritalrape.css');
  wp_enqueue_script('fs-2014-d3', '//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js' );
  wp_enqueue_script('topojson', '//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js' );
  wp_enqueue_script('Datamaps', 'http://datamaps.github.io/scripts/datamaps.world.min.js?v=1' );
  wp_enqueue_script('Map', get_template_directory_uri() . '/features/assets/js/decoder-d3-map.js' );
?>


<div class="wide_header transition">
    <img class="wide_header_bg" src="https://foreignpolicymag.files.wordpress.com/2017/03/decoder_top1.jpg" />
    <div class="wide_header_text">
        <span class="wide_header_section">Decoder</span>
        <h2 class="wide_header_title"><?php esc_html( the_title() ); ?></h2>
        <p class="wide_header_subtitle">Where — and how — legal systems around the world permit violence against women.</p>
        <p class="wide_header_author">
            <span class="writer">By Ruby Mellen</span>
        </p>
    </div>
</div>
<section class="wide_content">
    <section class="wide_copy" style="padding-top:1em;">
        <div class="wide_content_social share-large">
            <ul>
                <li>
                    <span data-endpoint="facebook" data-title="share" data-text="The Rapist's Loophole: Marriage" data-url="<?php echo esc_url( get_permalink() ); ?>" class="share-button facebook-share-large" onclick="utils.share(this);">
                        <span class="facebook-share-button">
                            <span class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/facebook-shares.png'); ?>">
                            </span>
                        </span>
                    </span>
                </li>
                <li>
                    <span data-endpoint="twitter" data-title="share" data-text="The Rapist's Loophole: Marriage" data-url="<?php echo esc_url( get_permalink() ); ?>" class="share-button twitter-share-large" onclick="utils.share(this);">
                        <span class="twitter-share-button">
                            <span class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/twitter-shares.png'); ?>">
                            </span>
                        </span>
                    </span>
                </li>
                <li>
                    <span data-endpoint="google" data-title="share" data-text="The Rapist's Loophole: Marriage" data-url="<?php echo esc_url( get_permalink() ); ?>" class="share-button google-plus-share-large" onclick="utils.share(this);">
                        <span class="google-plus-share-button">
                            <span class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/google-plus-shares.png'); ?>">
                            </span>
                        </span>
                    </span>
                </li>
                <li>
                    <span data-endpoint="reddit" data-title="share" data-text="The Rapist's Loophole: Marriage" data-url="<?php echo esc_url( get_permalink() ); ?>" class="share-button reddit-share-large" onclick="utils.share(this);">
                        <span class="reddit-share-button">
                            <span class="icon">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/reddit-shares.png'); ?>">
                            </span>
                        </span>
                    </span>
                </li>
                <li>
                    <span data-endpoint="email" data-title="share" data-text="The Rapist's Loophole: Marriage" data-url="<?php echo esc_url( get_permalink() ); ?>" class="share-button email-share-large" onclick="utils.share(this);">
                        <span class="email-share-button">
                            <span class="icon">
                                <a href="mailto:?subject=The%20Rapist%27s%20Loophole%3A%20Marriage%20on%20FP&body=I%20wanted%20to%20share%20this%20article%20with%20you:%20<?php echo esc_url( get_permalink() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/static/images/email-shares.png'); ?>"></a>
                            </span>
                        </span>
                    </span>
                </li>
            </ul>
        </div>
        <p class="wide_intro_lead">“When you see your wife commit an offense,” Friar Cherubino of Siena, Italy, wrote in his 15th-century treatise, <em>Rules of Marriage</em>, “take up a stick and beat her soundly, for it is better to punish the body and correct the soul than to damage the soul and spare the body.” Religious edicts such as this have reinforced men’s rights to inflict violence against women, especially their wives, for much of recorded history.</p>

        <p>Today, some legal systems still enshrine violence against women by keeping rape within the context of marriage impossible to prosecute.</p>

        <p>This map shows the countries that permit marital rape, or offer rapists an avenue to avoid punishment and prosecution by marrying their victims. Also on display is how few countries have expressly criminalized marital rape. Even the United States did not acknowledge domestic violence as a federal crime until 1994, when Congress passed the Violence Against Women Act. Russia recently decriminalized domestic abuse, and the Council of Islamic Ideology, a constitutional body that advises the Pakistani legislature on whether laws adhere to Islam’s teachings, recently said husbands should be allowed to “lightly beat” their wives.</p>

        <p>While it’s noteworthy that since 2000, at least 10 countries have changed their laws to provide a stronger defense against rape, real widespread global change remains limited. In many countries, advocates and legislators who try to tackle these problems face a deeply rooted patriarchy that has justified its rule over women with the language embedded in the penal code, making it harder to effect change. “The laws are constructed in a certain way to help create an environment that accepts rape,” says Jacqui Hunt, the director of the Europe office of <a href="http://www.equalitynow.org" target="_blank">Equality Now</a>, an international human rights organization that promotes women’s rights through legal advocacy. “They send a signal of how they value women.”</p>
    </section>

      <div class="map-parent">

        <div id="map-container"></div>
        <img src="https://foreignpolicymag.files.wordpress.com/2017/03/decoder_legend1.jpg" />
      </div>
    <section class="wide_copy">

        <p><strong>Out of the family</strong><br>Since 2000, at least five countries have changed their legal provisions to say a rapist can no longer avoid punishment by marrying the victim: Costa Rica, Ethiopia, Guatemala, Peru, and Uruguay.</p>

        <p><strong>Forgiveness fallacy</strong><br>Charges of rape can be dropped if the victim forgives the perpetrator in at least 10 countries: Afghanistan, Iraq, Lebanon, Palestine, the Philippines, Romania, Serbia, Singapore, Thailand, and Turkey.</p>

        <p><strong>One small step</strong><br>Since 2000, Serbia and Montenegro, which was still one country at the time, and Tonga have explicitly criminalized marital rape, while India, Malaysia, and Papua New Guinea have taken some steps to outlaw it.</p>

        <p><strong>Buyout</strong><br>A perpetrator can be exempt from punishment by reaching a “settlement,” financial or otherwise, with the victim or the victim’s family in at least 12 countries: Belgium, Croatia, Iraq, Jordan, Kazakhstan, Lebanon, Palestine, Nigeria, Romania, Russia, Singapore, and Thailand.</p>

        <p><strong>Unholy matrimony</strong><br>It is legally possible for perpetrators of rape or sexual assault to escape punishment if they marry their victim in at least nine countries: Bahrain, Iraq, Jordan, Kuwait, Lebanon, Palestine, the Philippines, Tajikistan, and Tunisia.</p>

        <p><strong>Legal hell</strong><br>Rape of a woman or girl by her husband is expressly legal in at least 10 countries: Ghana, India, Indonesia, Jordan, Lesotho, Nigeria, Oman, Singapore, Sri Lanka, and Tanzania.</p>

        <p style="font-family: Solido;">Map and statistics are taken from “<a href="http://www.equalitynow.org/sites/default/files/EqualityNowRapeLawReport2017_Spreads.pdf" target="_blank">The World’s Shame: The Global Rape Epidemic</a>,” published in March by Equality Now. The report surveys lawyers from 82 jurisdictions worldwide.</p>

        <p style="font-family: Solido;">Top photo credit: SASCHA SCHUERMANN/Getty Images</p>

        <p class="author-footer"><em>A version of this article originally appeared in the March/April 2017 issue of </em><span class="fp-red">&nbsp;FP</span><em> magazine. <a href="https://fp-reg.onecount.net/onecount/flexreg/displayform.php?utm_source=web&utm_medium=article%20counter%201&utm_term=20%25%20off&utm_content=5.99%2F7.99&utm_campaign=premium&g=0&form=161&pc=2DTH" target="_blank">Subscribe</a> to FP Premium for 20% off now!</em></p>

        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">

          <!--Diagonal stripe pattern for "Marry to avoid punishment 3" -->
          <defs>
            <pattern id="diagonal-stripe-orange"
              patternTransform="rotate(45)"
              width="4" height="4"
              patternUnits="userSpaceOnUse">
              <line x1="2" y1="0" x2="2" y2="4" stroke="#f36f21" />
            </pattern>
          </defs>

          <!--Diagonal stripe pattern for "Marry to avoid punishment 1" -->
          <defs>
            <pattern id="diagonal-stripe-red"
              patternTransform="rotate(45)"
              width="4" height="4"
              patternUnits="userSpaceOnUse">
              <line x1="2" y1="0" x2="2" y2="4" stroke="#ed1c24" />
            </pattern>
          </defs>

          <!--Diagonal stripe pattern for "Criminalized only if parties separated" -->
          <defs>
            <pattern id="diagonal-stripe-red-left"
              patternTransform="rotate(135)"
              width="4" height="4"
              patternUnits="userSpaceOnUse">
              <line x1="2" y1="0" x2="2" y2="4" stroke="#ed1c24" />
            </pattern>
          </defs>
        </svg>

      </section>
    </section>
</section>
