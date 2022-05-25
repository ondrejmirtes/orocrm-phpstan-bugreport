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

/* @OroUI/js_modules_config.html.twig */
class __TwigTemplate_c77d872c399497a59b5b65c35bbe7a26 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUI/js_modules_config.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/js_modules_config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUI/js_modules_config.html.twig"));

        // line 1
        $context["userName"] = null;
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2)) {
            // line 3
            echo "    ";
            $context["userName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3);
        }
        // line 5
        $macros["Asset"] = $this->macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroUI/js_modules_config.html.twig", 5)->unwrap();
        // line 6
        echo twig_call_macro($macros["Asset"], "macro_js_modules_config", [["oroui/js/app" => ["baseUrl" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "getSchemeAndHttpHost", [], "method", false, false, false, 8), "headerId" => $this->extensions['Oro\Bundle\NavigationBundle\Twig\HashNavExtension']->getHashNavigationHeaderConst(), "userName" =>         // line 10
(isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 10, $this->source); })()), "root" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "getBaseURL", [], "method", false, false, false, 11) . "/"), "startRouteName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_master_request_route"], "method", false, false, false, 12), "debug" => ((twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "debug", [], "any", false, false, false, 13)) ? (true) : (false)), "skipRouting" => "[data-nohash=true], .no-hash", "controllerPath" => "controllers/", "controllerSuffix" => "-controller", "trailing" => null], "oroui/js/extend/scriptjs" => ["bundlesPath" => twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/"), "?", 2), 0, [], "array", false, false, false, 20)]]], 6, $context, $this->getSourceContext());
        // line 22
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUI/js_modules_config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  61 => 13,  60 => 12,  59 => 11,  58 => 10,  57 => 8,  56 => 6,  54 => 5,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set userName = null %}
{% if app.user %}
    {% set userName = app.user.username %}
{% endif %}
{% import '@OroAsset/Asset.html.twig' as Asset %}
{{ Asset.js_modules_config({
    'oroui/js/app': {
        baseUrl: app.request.getSchemeAndHttpHost(),
        headerId: oro_hash_navigation_header(),
        userName: userName,
        root: app.request.getBaseURL() ~ '\\/',
        startRouteName: app.request.attributes.get('_master_request_route'),
        debug: app.debug ? true : false,
        skipRouting: '[data-nohash=true], .no-hash',
        controllerPath: 'controllers/',
        controllerSuffix: '-controller',
        trailing: null
    },
    'oroui/js/extend/scriptjs': {
        bundlesPath: asset('bundles/')|split('?', 2)[0],
    }
}) }}
", "@OroUI/js_modules_config.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UIBundle/Resources/views/js_modules_config.html.twig");
    }
}
