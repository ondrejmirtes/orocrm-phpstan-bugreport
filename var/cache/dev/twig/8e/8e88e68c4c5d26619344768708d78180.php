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

/* @OroTranslation/js_modules_config.html.twig */
class __TwigTemplate_3203901844621965fadae842db961db1 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroTranslation/js_modules_config.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/js_modules_config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroTranslation/js_modules_config.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "debug", [], "any", false, false, false, 1) && $this->extensions['Oro\Bundle\TranslationBundle\Twig\TranslationExtension']->isDebugJsTranslations())) {
            // line 2
            echo "    ";
            $context["translations"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_translation_jstranslation");
        } else {
            // line 4
            echo "    ";
            $context["translations"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Oro\Bundle\UIBundle\Twig\FormatExtension']->generateUrlWithoutFrontController("oro_translation_jstranslation"));
        }
        // line 6
        $macros["Asset"] = $this->macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroTranslation/js_modules_config.html.twig", 6)->unwrap();
        // line 7
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["orotranslation/js/translator" => ["debugTranslator" => $this->extensions['Oro\Bundle\TranslationBundle\Twig\TranslationExtension']->isDebugTranslator()], "orotranslation/js/translation-loader" => ["translationsResources" =>         // line 12
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 12, $this->source); })())]]], 7, $context, $this->getSourceContext());
        // line 14
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroTranslation/js_modules_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  59 => 12,  58 => 7,  56 => 6,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.debug and oro_translation_debug_js_translations() %}
    {% set translations = path('oro_translation_jstranslation') %}
{% else %}
    {% set translations = asset(asset_path('oro_translation_jstranslation')) %}
{% endif %}
{% import '@OroAsset/Asset.html.twig' as Asset %}
{{ Asset.js_modules_config({
    'orotranslation/js/translator': {
        debugTranslator: oro_translation_debug_translator()
    },
    'orotranslation/js/translation-loader': {
        translationsResources: translations
    }
}) }}
", "@OroTranslation/js_modules_config.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/TranslationBundle/Resources/views/js_modules_config.html.twig");
    }
}
