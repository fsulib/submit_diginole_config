<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/fsu_strata/templates/page.html.twig */
class __TwigTemplate_3e86288a1de122c770f9f0522764ea4df2ee344ed6caf462c18cf4cbc3d13939 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'fullheader' => [$this, 'block_fullheader'],
            'header' => [$this, 'block_header'],
            'slideshow' => [$this, 'block_slideshow'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'fullcontent' => [$this, 'block_fullcontent'],
            'advancedcontent' => [$this, 'block_advancedcontent'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        $context["mapused"] = "";
        // line 67
        $context["emptytext"] = "";
        // line 68
        $context["firstsidebar_rendered"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 68), 68, $this->source));
        // line 69
        $context["secondsidebar_rendered"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 69), 69, $this->source));
        // line 70
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 70), "fluid_container", [], "any", false, false, true, 70)) ? ("container-fluid") : ("container"));
        // line 72
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 235
        echo "
";
        // line 237
        $this->displayBlock('main', $context, $blocks);
        // line 357
        echo "<!-- Start advanced content region test -->


";
        // line 360
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "advancedcontent", [], "any", false, false, true, 360)) {
            // line 361
            echo "    ";
            $this->displayBlock('advancedcontent', $context, $blocks);
        }
        // line 367
        echo "<!-- end full bottom region -->


";
        // line 370
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 72
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "        ";
        $context["navbar_classes"] = [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["theme"] ?? null), "settings", [], "any", false, false, true, 74), "navbar_inverse", [], "any", false, false, true, 74)) ? ("navbar-inverse") : ("navbar-default")), 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "navbar_position", [], "any", false, false, true, 75), 75, $this->source)))) : (($context["container"] ?? null)))];
        // line 77
        echo "        <header id=\"fsu-header\" role=\"banner\">
          <div class=\"s3-k\"><a href=\"#content\" class=\"sr-only sr-only-focusable btn btn-tab skiplink-text\">Skip to main content</a></div>
            <div ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo " id=\"navbar\">
                <div id=\"fsu-global\" class=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 80, $this->source), "html", null, true);
        echo " s3-scored s3-plain-top s3-p-2\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div id=\"fsu-home\" class=\"col-xs-7 col-sm-5\"><p><a href=\"https://www.fsu.edu/\">Florida State
                                        University</a></p></div>
                            <div id=\"fsu-top\" class=\"col-xs-7 col-sm-8 hidden small text-uppercase\"><p><a
                                            href=\"https://fsu.edu\">FSU</a> | <a href=\"/\">";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 86, $this->source), "html", null, true);
        echo "</a></p></div>
                            <div id=\"fsu-nav-utility\" class=\"col-xs-5 col-sm-5 col-sm-offset-2\">
                                <nav class=\"fsu-nav-utility\">
                                    <ul class=\"nav navbar-nav navbar-right\">
                                      <li><a href=\"https://webmail.fsu.edu/\" title=\"Webmail\"><span class=\"fa fa-envelope\"></span><span class=\"hidden\">Webmail</span></a>
                                      </li>

                                        <li><a data-toggle=\"collapse\" data-parent=\".fsu-utilities\" href=\"#fsu-search\"
                                               aria-expanded=\"false\" aria-controls=\"fsu-search\" title=\"Search\"><span class=\"fa fa-search\"></span><span class=\"hidden\">Search FSU</span></a>
                                        </li>
                                      <li><a data-toggle=\"collapse\" data-parent=\".fsu-utilities\"
                                             href=\"#fsu-global-nav\" aria-expanded=\"false\"
                                             aria-controls=\"fsu-global-nav\" title=\"FSU Sites\"><span class=\"fa fa-bars\"></span><span
                                            class=\"hidden\">Navigation</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div><!-- fsu-global -->

                <div id=\"fsu-utility\" class=\"";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 107, $this->source), "html", null, true);
        echo " fsu-utilities\">
                    <div id=\"fsu-search\" class=\"collapse\" aria-expanded=\"false\">
                        <div class=\"container\">
                            <div class=\"s3-m-8\">
                                <div class=\"row\">
                                    <div class=\"col-md-5 col-md-offset-7\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-12 small text-right\">
                                                <form class=\"headerSearchForm\" method=\"get\"
                                                      onsubmit=\"return FSU_search(type.value, FSU_URLEncode(keywords.value));\"
                                                      action=\"\">
                                                    <select name=\"type\" title=\"Select Search Type\"
                                                            class=\"headerSearchSelect s3-m-3\" style=\"height:27px\">
                                                        <option selected=\"selected\" value=\"SITE\">This Site</option>
                                                        <option value=\"GOOGLE\">FSU Sites</option>
                                                        <!--<option value=\"PHFST\">Student Directory</option> -->
                                                        <option value=\"PHF\">Faculty &amp; Staff Directory</option>
                                                        <option value=\"DEPT\">Departments &amp; Services</option>
                                                    </select>
                                                    <br class=\"visible-sm\"/>
                                                    <input type=\"text\" name=\"keywords\" value=\"\" title=\"Search Input Box\"
                                                           size=\"20\" class=\"headerSearchBox\"/>
                                                    <input type=\"submit\" name=\"fsuSearch\" value=\"Search\"
                                                           title=\"Submit Search\"
                                                           class=\"headerSearchBtn btn btn-sm btn-success s3-m-3\"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fsu-search -->

                    <div id=\"fsu-global-nav\" class=\"collapse\" aria-expanded=\"false\">
                        <div class=\"container text-center small\">
                            <div class=\"clearfix s3-p-5\"></div>
                            <div class=\"row s3-m-10 s3-m-t0\">
                                <div class=\"col-xs-12\">
                                    <div class=\"row ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color"] ?? null), 146, $this->source), "html", null, true);
        echo "\">
                                        <div class=\"col-xs-6 visible-xs col-sm-12 text-left\">
                                            <nav class=\"fsu-nav-global\">

                                                <div class=\"navbar-topnav\">
                                                    ";
        // line 151
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\fsu_twig_filter\Twig\RenderRegion']->render_fsu_region("navigation_collapsible"));
        echo "
                                                </div>

                                            </nav>
                                        </div>
                                        <div class=\"col-xs-6 col-sm-12 fsu-global-menu\">
                                            <nav class=\"fsu-nav-global text-uppercase\">

                                                <ul class=\"nav navbar-nav\">
                                                    <li><a href=\"http://fsu.edu/academics/\"
                                                           target=\"_blank\">Academics</a></li>
                                                    <li><a href=\"http://admissions.fsu.edu/\"
                                                           target=\"_blank\">Admissions</a></li>
                                                    <li><a href=\"http://about.research.fsu.edu/\" target=\"_blank\">Research</a>
                                                    </li>
                                                    <li><a href=\"http://fsu.edu/faculty/\" target=\"_blank\">Faculty</a>
                                                    </li>
                                                    <li><a href=\"http://fsu.edu/students/\" target=\"_blank\">Students</a>
                                                    </li>
                                                    <li><a href=\"http://veterans.fsu.edu/\" target=\"_blank\">Veterans</a>
                                                    </li>
                                                    <li><a href=\"http://fsu.edu/alumni/\">Support FSU</a></li>
                                                </ul>

                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- fsu-global-nav -->
                </div><!-- .fsu-utilities -->

                <div id=\"fsu-masthead\" class=\"";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorhead"] ?? null), 184, $this->source), "html", null, true);
        echo " s3-scored\">
                    <div class=\"container\">
                        <div class=\"row hidden-xs\">
                            <div class=\"col-xs-12\">
                                <a href=\"http://www.fsu.edu/\"><img
                                            src=\"/themes/custom/fsu_strata/strata-";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["strataversion"] ?? null), 189, $this->source), "html", null, true);
        echo "/_/s3/img/fsu-seals/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logoselection"] ?? null), 189, $this->source), "html", null, true);
        echo ".png\"
                                            alt=\"Florida State University Seal\" id=\"fsu-seal\"></a>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <h1 id=\"fsu-title\"><a href=\"/\">";
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 195, $this->source), "html", null, true);
        echo "</a></h1>
                                <p id=\"fsu-subheading\">";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 196, $this->source), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div><!-- fsu-masthead -->

                <div class=\"hidden-xs\">
                    <div id=\"fsu-nav-primary\" class=\"";
        // line 203
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colornav"] ?? null), 203, $this->source), "html", null, true);
        echo " s3-scored s3-b-b0\">
                        <div class=\"navbar text-center\" role=\"navigation\">

                            <div class=\"navbar-header\">
                                ";
        // line 207
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
        echo "
                                ";
        // line 209
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 209)) {
            // line 210
            echo "                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                            data-target=\".navbar-collapse\">
                                        <span class=\"sr-only\">";
            // line 212
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                ";
        }
        // line 218
        echo "                            </div>

                            ";
        // line 221
        echo "
                            <div class=\"navbar-collapse collapse\">
                                ";
        // line 223
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\fsu_twig_filter\Twig\RenderRegion']->render_fsu_region("navigation_collapsible"));
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- /TODO -->

        </header>
    ";
    }

    // line 237
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 238
        echo "    <div role=\"main\" id=\"content\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 238, $this->source), "html", null, true);
        echo " js-quickedit-main-content ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorbody"] ?? null), 238, $this->source), "html", null, true);
        echo "\">
        <!-- Start full top region -->
        ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullheader", [], "any", false, false, true, 240)) {
            // line 241
            echo "            ";
            $this->displayBlock('fullheader', $context, $blocks);
            // line 248
            echo "        ";
        }
        // line 249
        echo "        <!-- end full top region -->
        <div class=\"container\">
            <!-- removing col-xl-12 <div class=\"row col-xl-12\"><!-- was s3-m-10 -->
            <div class=\"row\"><!-- was s3-m-10 -->
                <div class=\"s3-w s3-scored\">
                    ";
        // line 255
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 255)) {
            // line 256
            echo "                        ";
            $this->displayBlock('header', $context, $blocks);
            // line 261
            echo "                    ";
        }
        // line 262
        echo "                    ";
        // line 263
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 263)) {
            // line 264
            echo "                        ";
            $this->displayBlock('slideshow', $context, $blocks);
            // line 269
            echo "                    ";
        }
        // line 270
        echo "                    ";
        // line 271
        echo "                    ";
        if ( !twig_test_empty(($context["firstsidebar_rendered"] ?? null))) {
            // line 272
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 272)) {
                // line 273
                echo "                            ";
                $this->displayBlock('sidebar_first', $context, $blocks);
                // line 278
                echo "                        ";
            }
            // line 279
            echo "                    ";
        }
        // line 280
        echo "

                    ";
        // line 283
        echo "                    ";
        $context["content_classes"] = [0 => ((( !twig_test_empty(        // line 284
($context["firstsidebar_rendered"] ?? null)) &&  !twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-6") : ("")), 1 => ((( !twig_test_empty(        // line 285
($context["firstsidebar_rendered"] ?? null)) && twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-9") : ("")), 2 => (((twig_test_empty(        // line 286
($context["firstsidebar_rendered"] ?? null)) &&  !twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(        // line 287
($context["firstsidebar_rendered"] ?? null)) && twig_test_empty(($context["secondsidebar_rendered"] ?? null)))) ? ("col-sm-12") : (""))];
        // line 289
        echo "                    <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 289), 289, $this->source), "html", null, true);
        echo ">

                        ";
        // line 292
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 292)) {
            // line 293
            echo "                            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 296
            echo "                        ";
        }
        // line 297
        echo "
                        ";
        // line 299
        echo "                        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 300
            echo "                            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 303
            echo "                        ";
        }
        // line 304
        echo "
                        ";
        // line 306
        echo "                        ";
        if (($context["action_links"] ?? null)) {
            // line 307
            echo "                            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 310
            echo "                        ";
        }
        // line 311
        echo "
                        ";
        // line 313
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 313)) {
            // line 314
            echo "                            ";
            $this->displayBlock('help', $context, $blocks);
            // line 317
            echo "                        ";
        }
        // line 318
        echo "
                        ";
        // line 320
        echo "                        ";
        $this->displayBlock('content', $context, $blocks);
        // line 324
        echo "                    </section>

                    ";
        // line 327
        echo "                    ";
        if ( !twig_test_empty(($context["secondsidebar_rendered"] ?? null))) {
            // line 328
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 328)) {
                // line 329
                echo "                            ";
                $this->displayBlock('sidebar_second', $context, $blocks);
                // line 334
                echo "                        ";
            }
            // line 335
            echo "                    ";
        }
        // line 336
        echo "
                </div>
            </div>
        </div>
        <!-- Start full bottom region -->
        ";
        // line 341
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullcontent", [], "any", false, false, true, 341)) {
            // line 342
            echo "            ";
            $this->displayBlock('fullcontent', $context, $blocks);
            // line 353
            echo "        ";
        }
        // line 354
        echo "        <!-- end full bottom region -->
    </div>
";
    }

    // line 241
    public function block_fullheader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "                <div class=\"container-fluid s3-m-0 full-top-region\">
                    <div class=\"row\">
                        ";
        // line 244
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullheader", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            ";
    }

    // line 256
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 257
        echo "                            <div class=\"col-sm-12\" role=\"heading\">
                                ";
        // line 258
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
        echo "
                            </div>
                        ";
    }

    // line 264
    public function block_slideshow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        echo "                            <div class=\"col-sm-12\" role=\"slideshow\">
                                ";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
        echo "
                            </div>
                        ";
    }

    // line 273
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 274
        echo "                                <aside class=\"col-sm-3\" role=\"complementary\">
                                    ";
        // line 275
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
        echo "
                                </aside>
                            ";
    }

    // line 293
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        echo "                                <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
        echo "</div>
                            ";
    }

    // line 300
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 301
        echo "                                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 301, $this->source), "html", null, true);
        echo "
                            ";
    }

    // line 307
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 308
        echo "                                <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 308, $this->source), "html", null, true);
        echo "</ul>
                            ";
    }

    // line 314
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "                                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
        echo "
                            ";
    }

    // line 320
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 321
        echo "                            <a id=\"main-content\"></a>
                            ";
        // line 322
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
        echo "
                        ";
    }

    // line 329
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "                                <aside class=\"col-sm-3\" role=\"complementary\">
                                    ";
        // line 331
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 331), 331, $this->source), "html", null, true);
        echo "
                                </aside>
                            ";
    }

    // line 342
    public function block_fullcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 343
        echo "                <div class=\"s3 ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colorfullwidth"] ?? null), 343, $this->source), "html", null, true);
        echo " s3-scored full-bottom-region\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                ";
        // line 347
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "fullcontent", [], "any", false, false, true, 347), 347, $this->source), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div><!-- .container -->
                </div>
            ";
    }

    // line 361
    public function block_advancedcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 362
        echo "        <div class=\"full-advanced-region\">
            ";
        // line 363
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "advancedcontent", [], "any", false, false, true, 363), 363, $this->source), "html", null, true);
        echo "
        </div>
    ";
    }

    // line 370
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 371
        echo "    <footer id=\"fsu-footer\" class=\"small footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 371, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 371, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 372
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 372)) {
            // line 373
            echo "            <div class=\"container\">
                <div class=\"row s3-m-10\">
                    ";
            // line 375
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 375), 375, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        // line 379
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colortwo"] ?? null), 379, $this->source), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row s3-m-10\">
                    <!-- new variable area TODO -->
                    ";
        // line 384
        echo "                    ";
        if (((twig_test_empty(($context["footertextone"] ?? null)) || twig_test_empty(        // line 385
($context["footertexttwo"] ?? null))) || ((twig_test_empty(        // line 386
($context["maptext"] ?? null)) &&  !twig_test_empty(        // line 387
($context["googlemap"] ?? null))) && twig_test_empty(($context["twitterfeed"] ?? null))))) {
            // line 388
            echo "                        ";
            $context["emptytext"] = "1";
            // line 389
            echo "                    ";
        }
        // line 390
        echo "                    ";
        if ((((((((((((((((((( !twig_test_empty(($context["twitterfeed"] ?? null)) ||  !twig_test_empty(        // line 391
($context["locationname"] ?? null))) ||  !twig_test_empty(        // line 392
($context["locationaddress"] ?? null))) ||  !twig_test_empty(        // line 393
($context["locationcity"] ?? null))) ||  !twig_test_empty(        // line 394
($context["locationstate"] ?? null))) ||  !twig_test_empty(        // line 395
($context["locationpostalcode"] ?? null))) ||  !twig_test_empty(        // line 396
($context["locationlat"] ?? null))) ||  !twig_test_empty(        // line 397
($context["locationlon"] ?? null))) ||  !twig_test_empty(        // line 398
($context["footertextone"] ?? null))) ||  !twig_test_empty(        // line 399
($context["footertexttwo"] ?? null))) ||  !twig_test_empty(        // line 400
($context["maptext"] ?? null))) ||  !twig_test_empty(        // line 401
($context["twitterfeed"] ?? null))) ||  !twig_test_empty(        // line 402
($context["instagram"] ?? null))) ||  !twig_test_empty(        // line 403
($context["twitter"] ?? null))) ||  !twig_test_empty(        // line 404
($context["facebook"] ?? null))) ||  !twig_test_empty(        // line 405
($context["youtube"] ?? null))) ||  !twig_test_empty(        // line 406
($context["linkedin"] ?? null))) ||  !twig_test_empty(        // line 407
($context["googlemap"] ?? null))) ||  !twig_test_empty(        // line 408
($context["maplocation"] ?? null)))) {
            // line 409
            echo "
                        <div class=\"col-xs-12 footer-details\">
                            ";
            // line 412
            echo "                            <div class=\"row\">
                                <div class=\"col-xs-12 col-md-12 footer-small-area\">
                                    ";
            // line 415
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 416
                echo "                                        <div class=\"col-xs-3 col-md-3\"><!-- maptext-footertextone-footertexttwo -->
                                            ";
                // line 417
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 417, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 420
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 420, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 423
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 423, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 426
            echo "                                    ";
            // line 427
            echo "                                    ";
            // line 428
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 429
                echo "                                        <div class=\"col-xs-3 col-md-3\">
                                            <!-- smallmap-footertextone-footertexttwo-maptext -->
                                            ";
                // line 431
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 431, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 434
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 434, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 437
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 437, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-3 col-md-3\">
                                            ";
                // line 440
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 440, $this->source));
                echo "
                                            ";
                // line 441
                $context["mapused"] = "1";
                // line 442
                echo "                                        </div>
                                    ";
            }
            // line 444
            echo "                                    ";
            // line 445
            echo "
                                    ";
            // line 447
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 448
                echo "                                        <div class=\"col-xs-4 col-md-4\">
                                            <!-- smallmap-footertextone-footertexttwo-maptext-nosocial -->
                                            ";
                // line 450
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 450, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 453
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 453, $this->source));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 453, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 456
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 456, $this->source));
                echo "
                                            ";
                // line 457
                $context["mapused"] = "1";
                // line 458
                echo "                                        </div>
                                    ";
            }
            // line 460
            echo "                                    ";
            // line 461
            echo "                                    ";
            // line 462
            echo "                                    ";
            // line 463
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 464
                echo "                                        <div class=\"col-xs-6 col-md-6\"> <!-- map and not text -->
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 469
                echo "                                        </div>
                                    ";
            }
            // line 471
            echo "                                    ";
            // line 472
            echo "                                    ";
            if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) &&  !twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 473
                echo "                                        <div class=\"col-xs-6 col-md-6\"><!-- map and footer text one -->
                                            ";
                // line 474
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 474, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 477
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemapsmall"] ?? null), 477, $this->source));
                echo "
                                            ";
                // line 478
                $context["mapused"] = "1";
                // line 479
                echo "                                        </div>
                                    ";
            }
            // line 481
            echo "                                    ";
            // line 482
            echo "
                                    ";
            // line 484
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) &&  !twig_test_empty(($context["maptext"] ?? null)))) {
                // line 485
                echo "                                        <div class=\"col-xs-4 col-md-4\"><!-- footertextone-footertexttwo-maptext -->
                                            ";
                // line 486
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 486, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 489
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 489, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-4 col-md-4\">
                                            ";
                // line 492
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["maptext"] ?? null), 492, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 495
            echo "                                    ";
            // line 496
            echo "
                                    ";
            // line 498
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) &&  !twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 499
                echo "                                        <div class=\"col-xs-6 col-md-6\"><!-- footertextone-footertexttwo -->
                                            ";
                // line 500
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 500, $this->source));
                echo "
                                        </div>
                                        <div class=\"col-xs-6 col-md-6\">
                                            ";
                // line 503
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertexttwo"] ?? null), 503, $this->source));
                echo "
                                        </div>
                                    ";
            }
            // line 506
            echo "                                    ";
            // line 507
            echo "
                                    ";
            // line 509
            echo "                                    ";
            if ((((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                // line 510
                echo "                                        <div class=\"col-xs-12 col-md-12\"><!-- footertextone -->
                                            ";
                // line 511
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["footertextone"] ?? null), 511, $this->source));
                echo "
                                        </div>

                                    ";
            }
            // line 515
            echo "                                    ";
            // line 516
            echo "
                                </div>
                            </div>
                            ";
            // line 520
            echo "                            ";
            // line 521
            echo "                            ";
            // line 522
            echo "                            ";
            if (( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitterfeed"] ?? null)))) {
                // line 523
                echo "                                <div class=\"row\">
                                    ";
                // line 531
                echo "
                                    ";
                // line 533
                echo "                                    ";
                if ((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitter"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null)))) {
                    // line 534
                    echo "                                        <div class=\"col-md-6 footer-map-large\">
                                            ";
                    // line 535
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemap"] ?? null), 535, $this->source));
                    echo "
                                            ";
                    // line 536
                    $context["mapused"] = "1";
                    // line 537
                    echo "                                        </div>

                                    ";
                }
                // line 540
                echo "                                    ";
                // line 541
                echo "

                                    <div class=\"col-xs-12 col-md-6 social-stream facebook\">
                                        ";
                // line 544
                if ( !twig_test_empty(($context["twitterfeed"] ?? null))) {
                    // line 545
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["twitterfeed"] ?? null), 545, $this->source));
                    echo "
                                        ";
                }
                // line 547
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 550
            echo "
                            ";
            // line 552
            echo "                            ";
            if ((twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["twitterfeed"] ?? null)))) {
                // line 553
                echo "                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-12 social-stream\"><!-- no map-social only -->
                                        ";
                // line 555
                if ( !twig_test_empty(($context["twitterfeed"] ?? null))) {
                    // line 556
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["twitterfeed"] ?? null), 556, $this->source));
                    echo "
                                        ";
                }
                // line 558
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 561
            echo "
                            ";
            // line 563
            echo "                            ";
            if (((((( !twig_test_empty(($context["maplocation"] ?? null)) && twig_test_empty(($context["twitterfeed"] ?? null))) && twig_test_empty(($context["footertextone"] ?? null))) && twig_test_empty(($context["footertexttwo"] ?? null))) && twig_test_empty(($context["maptext"] ?? null))) && twig_test_empty(($context["mapused"] ?? null)))) {
                // line 564
                echo "                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-md-12 social-stream\"><!-- everything empty but map -->
                                        ";
                // line 566
                if (( !twig_test_empty(($context["maplocation"] ?? null)) &&  !twig_test_empty(($context["googlemap"] ?? null)))) {
                    // line 567
                    echo "                                            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["googlemap"] ?? null), 567, $this->source));
                    echo "
                                        ";
                }
                // line 569
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 572
            echo "
                            ";
            // line 574
            echo "                        </div>
                        ";
            // line 576
            echo "
                        ";
            // line 578
            echo "                        ";
            // line 611
            echo "                        ";
            // line 612
            echo "

                    ";
        }
        // line 615
        echo "                    <!-- end new variables -->

                    <div class=\"col-xs-12\">
                        <div class=\"row\">

                            <div class=\"col-xs-6 col-sm-3\">
                                ";
        // line 621
        if (twig_test_empty(($context["overrideaddress"] ?? null))) {
            // line 622
            echo "                                    <p>&copy; Florida State University
                                        <!-- <br>600 W. College Avenue -->
                                        <br>Tallahassee, FL 32306</p>
                                ";
        } else {
            // line 626
            echo "                                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["overrideaddress"] ?? null), 626, $this->source));
            echo "
                                ";
        }
        // line 628
        echo "                            </div>

                            <div class=\"col-xs-6 col-sm-3\">
                                <p><a href=\"https://directory.fsu.edu/\" target=\"_blank\">FSU Directory Assistance</a>
\t\t\t\t\t\t\t\t\t<br><a href=\"http://fsu.edu/misc/comments.html\" target=\"_blank\">Questions or Comments</a>
                            </div>

                            <div class=\"clearfix visible-xs\"></div>

                            <div class=\"col-xs-6 col-sm-3\">
                                <p><a href=\"http://fsu.edu/misc/policy.html\" target=\"_blank\">Privacy Policy</a>
                                    <br><a href=\"http://fsu.edu/misc/copyright.html\" target=\"_blank\">Copyright</a></p>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 s3-txt-md-r s3-txt-lg-r\">
                              ";
        // line 643
        if ((($context["strataversion"] ?? null) == "3.3.9")) {
            // line 644
            echo "                                <nav aria-label=\"Social Media\" class=\"nav-icons branded\">
                                  ";
            // line 645
            if (twig_test_empty(($context["facebook"] ?? null))) {
                // line 646
                echo "                                    ";
                $context["facebook"] = "https://www.facebook.com/floridastate";
                // line 647
                echo "                                  ";
            }
            // line 648
            echo "                                  ";
            if (twig_test_empty(($context["instagram"] ?? null))) {
                // line 649
                echo "                                    ";
                $context["instagram"] = "https://instagram.com/floridastateuniversity/";
                // line 650
                echo "                                  ";
            }
            // line 651
            echo "                                  ";
            if (twig_test_empty(($context["twitter"] ?? null))) {
                // line 652
                echo "                                    ";
                $context["twitter"] = "https://twitter.com/floridastate";
                // line 653
                echo "                                  ";
            }
            // line 654
            echo "                                  ";
            if (twig_test_empty(($context["youtube"] ?? null))) {
                // line 655
                echo "                                    ";
                $context["youtube"] = "https://www.youtube.com/FloridaState";
                // line 656
                echo "                                  ";
            }
            // line 657
            echo "                                  ";
            if (twig_test_empty(($context["linkedin"] ?? null))) {
                // line 658
                echo "                                    ";
                $context["linkedin"] = "https://www.linkedin.com/edu/school?id=18100";
                // line 659
                echo "                                  ";
            }
            // line 660
            echo "                                  <ul class=\"menu clearfix\">
                                    <li><a href=\"";
            // line 661
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 661, $this->source), "html", null, true);
            echo "\" title=\"Like Florida State on Facebook\"
                                           target=\"_blank\"><span class=\"fab fa-facebook\"></span><span class=\"hidden\">Facebook</span></a>
                                    </li>
                                    <li><a href=\"";
            // line 664
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 664, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Instagram\"
                                           target=\"_blank\"><span class=\"fab fa-instagram\"></span><span class=\"hidden\">Instagram</span></a>
                                    </li>
                                    <li><a href=\"";
            // line 667
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 667, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Twitter\"
                                           target=\"_blank\"><span class=\"fab fa-twitter\"></span><span
                                          class=\"hidden\">Twitter</span></a></li>
                                    <li><a href=\"";
            // line 670
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 670, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Youtube\"
                                           target=\"_blank\"><span class=\"fab fa-youtube\"></span><span
                                          class=\"hidden\">YouTube</span></a></li>
                                    <li><a href=\"";
            // line 673
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 673, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on LinkedIn\"
                                           target=\"_blank\"><span class=\"fab fa-linkedin\"></span><span class=\"hidden\">LinkedIn</span></a>
                                    </li>
                                    <li><a href=\"https://www.fsu.edu/socialmedia/\" title=\"FSU Social Media\"><span class=\"fas fa-plus\"></span><span class=\"hidden\">More FSU Social Media</span></a>
                                    </li>
                                  </ul>
                                </nav>
                              ";
        } else {
            // line 681
            echo "                                <nav class=\"nav-social nav-icons\">
                                    ";
            // line 682
            if (twig_test_empty(($context["facebook"] ?? null))) {
                // line 683
                echo "                                        ";
                $context["facebook"] = "https://www.facebook.com/floridastate";
                // line 684
                echo "                                    ";
            }
            // line 685
            echo "                                    ";
            if (twig_test_empty(($context["instagram"] ?? null))) {
                // line 686
                echo "                                        ";
                $context["instagram"] = "https://instagram.com/floridastateuniversity/";
                // line 687
                echo "                                    ";
            }
            // line 688
            echo "                                    ";
            if (twig_test_empty(($context["twitter"] ?? null))) {
                // line 689
                echo "                                        ";
                $context["twitter"] = "https://twitter.com/floridastate";
                // line 690
                echo "                                    ";
            }
            // line 691
            echo "                                    ";
            if (twig_test_empty(($context["youtube"] ?? null))) {
                // line 692
                echo "                                        ";
                $context["youtube"] = "https://www.youtube.com/FloridaState";
                // line 693
                echo "                                    ";
            }
            // line 694
            echo "                                    ";
            if (twig_test_empty(($context["linkedin"] ?? null))) {
                // line 695
                echo "                                        ";
                $context["linkedin"] = "https://www.linkedin.com/edu/school?id=18100";
                // line 696
                echo "                                    ";
            }
            // line 697
            echo "                                    <ul class=\"menu clearfix\">
                                        <li><a href=\"";
            // line 698
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 698, $this->source), "html", null, true);
            echo "\" title=\"Like Florida State on Facebook\"
                                               target=\"_blank\"><span class=\"fa fa-facebook\"></span><span class=\"hidden\">Facebook</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 701
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 701, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Instagram\"
                                               target=\"_blank\"><span class=\"fa fa-instagram\"></span><span class=\"hidden\">Instagram</span></a>
                                        </li>
                                        <li><a href=\"";
            // line 704
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 704, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Twitter\"
                                               target=\"_blank\"><span class=\"fa fa-twitter\"></span><span
                                                        class=\"hidden\">Twitter</span></a></li>
                                        <li><a href=\"";
            // line 707
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 707, $this->source), "html", null, true);
            echo "\" title=\"Follow Florida State on Youtube\"
                                               target=\"_blank\"><span class=\"fa fa-youtube\"></span><span
                                                        class=\"hidden\">YouTube</span></a></li>
                                        <li><a href=\"";
            // line 710
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 710, $this->source), "html", null, true);
            echo "\" title=\"Connect with Florida State on LinkedIn\"
                                               target=\"_blank\"><span class=\"fa fa-linkedin\"></span><span class=\"hidden\">LinkedIn</span></a>
                                        </li>
                                        <li><a href=\"https://www.fsu.edu/socialmedia/\" title=\"FSU Social Media\"><span class=\"fa fa-plus\"></span><span class=\"hidden\">More FSU Social Media</span></a>
                                        </li>
                                    </ul>
                                </nav>
                              ";
        }
        // line 718
        echo "                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/fsu_strata/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1265 => 718,  1254 => 710,  1248 => 707,  1242 => 704,  1236 => 701,  1230 => 698,  1227 => 697,  1224 => 696,  1221 => 695,  1218 => 694,  1215 => 693,  1212 => 692,  1209 => 691,  1206 => 690,  1203 => 689,  1200 => 688,  1197 => 687,  1194 => 686,  1191 => 685,  1188 => 684,  1185 => 683,  1183 => 682,  1180 => 681,  1169 => 673,  1163 => 670,  1157 => 667,  1151 => 664,  1145 => 661,  1142 => 660,  1139 => 659,  1136 => 658,  1133 => 657,  1130 => 656,  1127 => 655,  1124 => 654,  1121 => 653,  1118 => 652,  1115 => 651,  1112 => 650,  1109 => 649,  1106 => 648,  1103 => 647,  1100 => 646,  1098 => 645,  1095 => 644,  1093 => 643,  1076 => 628,  1070 => 626,  1064 => 622,  1062 => 621,  1054 => 615,  1049 => 612,  1047 => 611,  1045 => 578,  1042 => 576,  1039 => 574,  1036 => 572,  1031 => 569,  1025 => 567,  1023 => 566,  1019 => 564,  1016 => 563,  1013 => 561,  1008 => 558,  1002 => 556,  1000 => 555,  996 => 553,  993 => 552,  990 => 550,  985 => 547,  979 => 545,  977 => 544,  972 => 541,  970 => 540,  965 => 537,  963 => 536,  959 => 535,  956 => 534,  953 => 533,  950 => 531,  947 => 523,  944 => 522,  942 => 521,  940 => 520,  935 => 516,  933 => 515,  926 => 511,  923 => 510,  920 => 509,  917 => 507,  915 => 506,  909 => 503,  903 => 500,  900 => 499,  897 => 498,  894 => 496,  892 => 495,  886 => 492,  880 => 489,  874 => 486,  871 => 485,  868 => 484,  865 => 482,  863 => 481,  859 => 479,  857 => 478,  853 => 477,  847 => 474,  844 => 473,  841 => 472,  839 => 471,  835 => 469,  830 => 464,  827 => 463,  825 => 462,  823 => 461,  821 => 460,  817 => 458,  815 => 457,  811 => 456,  803 => 453,  797 => 450,  793 => 448,  790 => 447,  787 => 445,  785 => 444,  781 => 442,  779 => 441,  775 => 440,  769 => 437,  763 => 434,  757 => 431,  753 => 429,  750 => 428,  748 => 427,  746 => 426,  740 => 423,  734 => 420,  728 => 417,  725 => 416,  722 => 415,  718 => 412,  714 => 409,  712 => 408,  711 => 407,  710 => 406,  709 => 405,  708 => 404,  707 => 403,  706 => 402,  705 => 401,  704 => 400,  703 => 399,  702 => 398,  701 => 397,  700 => 396,  699 => 395,  698 => 394,  697 => 393,  696 => 392,  695 => 391,  693 => 390,  690 => 389,  687 => 388,  685 => 387,  684 => 386,  683 => 385,  681 => 384,  673 => 379,  666 => 375,  662 => 373,  660 => 372,  653 => 371,  649 => 370,  642 => 363,  639 => 362,  635 => 361,  625 => 347,  617 => 343,  613 => 342,  606 => 331,  603 => 330,  599 => 329,  593 => 322,  590 => 321,  586 => 320,  579 => 315,  575 => 314,  568 => 308,  564 => 307,  557 => 301,  553 => 300,  546 => 294,  542 => 293,  535 => 275,  532 => 274,  528 => 273,  521 => 266,  518 => 265,  514 => 264,  507 => 258,  504 => 257,  500 => 256,  492 => 244,  488 => 242,  484 => 241,  478 => 354,  475 => 353,  472 => 342,  470 => 341,  463 => 336,  460 => 335,  457 => 334,  454 => 329,  451 => 328,  448 => 327,  444 => 324,  441 => 320,  438 => 318,  435 => 317,  432 => 314,  429 => 313,  426 => 311,  423 => 310,  420 => 307,  417 => 306,  414 => 304,  411 => 303,  408 => 300,  405 => 299,  402 => 297,  399 => 296,  396 => 293,  393 => 292,  387 => 289,  385 => 287,  384 => 286,  383 => 285,  382 => 284,  380 => 283,  376 => 280,  373 => 279,  370 => 278,  367 => 273,  364 => 272,  361 => 271,  359 => 270,  356 => 269,  353 => 264,  350 => 263,  348 => 262,  345 => 261,  342 => 256,  339 => 255,  332 => 249,  329 => 248,  326 => 241,  324 => 240,  316 => 238,  312 => 237,  296 => 223,  292 => 221,  288 => 218,  279 => 212,  275 => 210,  272 => 209,  268 => 207,  261 => 203,  251 => 196,  247 => 195,  236 => 189,  228 => 184,  192 => 151,  184 => 146,  142 => 107,  118 => 86,  109 => 80,  105 => 79,  101 => 77,  99 => 75,  98 => 74,  96 => 73,  92 => 72,  88 => 370,  83 => 367,  79 => 361,  77 => 360,  72 => 357,  70 => 237,  67 => 235,  64 => 72,  62 => 70,  60 => 69,  58 => 68,  56 => 67,  54 => 66,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fsu_strata/templates/page.html.twig", "/var/sites/submit_diginole/web/themes/custom/fsu_strata/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 66, "block" => 72, "if" => 360);
        static $filters = array("clean_class" => 75, "escape" => 79, "t" => 212, "raw" => 417);
        static $functions = array("render_var" => 68, "render_fsu_region" => 151);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 't', 'raw'],
                ['render_var', 'render_fsu_region']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
