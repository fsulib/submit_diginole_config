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

/* themes/custom/fsu_strata/templates/html.html.twig */
class __TwigTemplate_d2d5a5b9bf60340e928e7c3ef496de6cd7ac84e18821ece5b9b6719aa5a6ba31 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["body_classes"] = [0 => ((        // line 49
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 50
($context["root_path"] ?? null)) ? ("path-frontpage home") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 50, $this->source))))), 2 => ((        // line 51
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 51, $this->source)))) : ("")), 3 => ((        // line 52
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 53), "navbar_position", [], "any", false, false, true, 53), 53, $this->source))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 54
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 54)) ? ("has-glyphicons") : ("")), 6 => ((        // line 55
($context["node_type"] ?? null)) ? (($context["color"] ?? null)) : (($context["color"] ?? null)))];
        // line 58
        echo "<!DOCTYPE html>
<html ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 59, $this->source), "html", null, true);
        echo ">
  <head>
    <!-- BEGIN - Florida State University - Google Tag Manager Header Script -->
    <!-- CODE UPDATE - 11/23/2017 -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5P9ZCB');</script>
    <!-- END - Florida State University - Google Tag Manager Header Script -->

    <head-placeholder token=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 70, $this->source));
        echo "\">
    <title>";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 71, $this->source), " | "));
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://use.typekit.net/qwg1fji.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"https://use.typekit.net/bwf7bac.css\">
    <css-placeholder token=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 74, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 75, $this->source));
        echo "\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->



<!-- Facebook Script -->
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=104580419614646\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end facebook script -->



  </head>
  <body id=\"fsu-strata-three\" ";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 98), 98, $this->source), "html", null, true);
        echo " >

    <!-- BEGIN - Florida State University - Google Tag Manager NoScript -->
    <!-- CODE UPDATE - 11/23/2017 -->
    <noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-5P9ZCB\"
    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\" title=\"Tracking\"></iframe></noscript>
    <!-- END - Florida State University - Google Tag Manager NoScript -->

    ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 106, $this->source), "html", null, true);
        echo "
    ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 107, $this->source), "html", null, true);
        echo "
    ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 108, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 109, $this->source));
        echo "\">
    <script type=\"text/javascript\" src=\"/themes/custom/fsu_strata/strata-3.1/_/s3/js/extend/jquery.flexslider.js\"></script>
    <script type=\"text/javascript\" src=\"/themes/custom/fsu_strata/strata-3.1/_/s3/js/extend/flexslider.js\"></script>
    <script type=\"text/javascript\" src=\"/themes/custom/fsu_strata/strata-3.1/_/s3/js/extend/strata-carousel.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/fsu_strata/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 109,  124 => 108,  120 => 107,  116 => 106,  105 => 98,  79 => 75,  75 => 74,  69 => 71,  65 => 70,  51 => 59,  48 => 58,  46 => 55,  45 => 54,  44 => 53,  43 => 52,  42 => 51,  41 => 50,  40 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fsu_strata/templates/html.html.twig", "/var/sites/submit_diginole/web/themes/custom/fsu_strata/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 48);
        static $filters = array("clean_class" => 50, "escape" => 59, "raw" => 70, "safe_join" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join'],
                []
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
