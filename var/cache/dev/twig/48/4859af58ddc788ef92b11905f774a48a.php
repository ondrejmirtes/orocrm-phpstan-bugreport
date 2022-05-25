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

/* @OroNavigation/macros.html.twig */
class __TwigTemplate_b0ff181e697217588990939f0cae8382 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/macros.html.twig"));

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderClientLink($__config__ = null, $__urlParameters__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "config" => $__config__,
            "urlParameters" => $__urlParameters__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderClientLink"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderClientLink"));

            // line 2
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/macros.html.twig", 2)->unwrap();
            // line 3
            echo "    ";
            echo twig_call_macro($macros["UI"], "macro_clientLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source,             // line 5
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "dataUrl", [], "any", false, false, false, 5), (isset($context["urlParameters"]) || array_key_exists("urlParameters", $context) ? $context["urlParameters"] : (function () { throw new RuntimeError('Variable "urlParameters" does not exist.', 5, $this->source); })())), "aCss" => twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "aCss", [], "any", false, false, false, 6), "iCss" => twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "iCss", [], "any", false, false, false, 7), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "label", [], "any", false, false, false, 8)), "widget" => ["type" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "widget", [], "any", false, false, false, 10), "type", [], "any", false, false, false, 10), "multiple" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "widget", [], "any", false, false, false, 11), "multiple", [], "any", false, false, false, 11), "refresh-widget-alias" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "widget", [], "any", false, false, false, 12), "refreshWidgetAlias", [], "any", false, false, false, 12), "reload-grid-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "widget", [], "any", false, false, false, 13), "reloadGridName", [], "any", false, false, false, 13), "options" => ["alias" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "widget", [], "any", false, false, false, 15), "options", [], "any", false, false, false, 15), "alias", [], "any", false, false, false, 15), "dialogOptions" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 17
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "widget", [], "any", false, false, false, 17), "options", [], "any", false, false, false, 17), "dialogOptions", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17)), "allowMaximize" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "widget", [], "any", false, false, false, 18), "options", [], "any", false, false, false, 18), "dialogOptions", [], "any", false, false, false, 18), "allowMaximize", [], "any", false, false, false, 18), "allowMinimize" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "widget", [], "any", false, false, false, 19), "options", [], "any", false, false, false, 19), "dialogOptions", [], "any", false, false, false, 19), "allowMinimize", [], "any", false, false, false, 19), "dblclick" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "widget", [], "any", false, false, false, 20), "options", [], "any", false, false, false, 20), "dialogOptions", [], "any", false, false, false, 20), "dblclick", [], "any", false, false, false, 20), "maximizedHeightDecreaseBy" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "widget", [], "any", false, false, false, 21), "options", [], "any", false, false, false, 21), "dialogOptions", [], "any", false, false, false, 21), "maximizedHeightDecreaseBy", [], "any", false, false, false, 21), "width" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "widget", [], "any", false, false, false, 22), "options", [], "any", false, false, false, 22), "dialogOptions", [], "any", false, false, false, 22), "width", [], "any", false, false, false, 22)]]]]], 4, $context, $this->getSourceContext());
            // line 27
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroNavigation/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 27,  96 => 22,  95 => 21,  94 => 20,  93 => 19,  92 => 18,  91 => 17,  90 => 15,  89 => 13,  88 => 12,  87 => 11,  86 => 10,  85 => 8,  84 => 7,  83 => 6,  82 => 5,  80 => 3,  77 => 2,  57 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderClientLink(config, urlParameters) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    {{
        UI.clientLink({
            'dataUrl': path(config.dataUrl, urlParameters),
            'aCss': config.aCss,
            'iCss': config.iCss,
            'label' : config.label|trans,
            'widget' : {
                'type' : config.widget.type,
                'multiple' : config.widget.multiple,
                'refresh-widget-alias': config.widget.refreshWidgetAlias,
                'reload-grid-name': config.widget.reloadGridName,
                'options' : {
                    'alias': config.widget.options.alias,
                    'dialogOptions' : {
                        'title' : config.widget.options.dialogOptions.title|trans,
                        'allowMaximize': config.widget.options.dialogOptions.allowMaximize,
                        'allowMinimize': config.widget.options.dialogOptions.allowMinimize,
                        'dblclick': config.widget.options.dialogOptions.dblclick,
                        'maximizedHeightDecreaseBy': config.widget.options.dialogOptions.maximizedHeightDecreaseBy,
                        'width': config.widget.options.dialogOptions.width
                    }
                }
            }
        })
    }}
{% endmacro %}
", "@OroNavigation/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/macros.html.twig");
    }
}
