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

/* @OroPlatform/Platform/systemInfo.html.twig */
class __TwigTemplate_0295b3aa17e8816b8ca70476dc6ca6a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageHeader' => [$this, 'block_pageHeader'],
            'navButtons' => [$this, 'block_navButtons'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroPlatform/Platform/systemInfo.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/Platform/systemInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroPlatform/Platform/systemInfo.html.twig"));

        // line 3
        $context["entity"] = null;
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/view.html.twig", "@OroPlatform/Platform/systemInfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 6
        echo "    ";
        $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroPlatform/Platform/systemInfo.html.twig", 6)->display(twig_array_merge($context, ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.system_info")]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 9
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 9));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 11
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 11));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 12
        echo "    ";
        $macros["systeminfo"] = $this;
        // line 13
        echo "
    ";
        // line 14
        ob_start();
        // line 15
        echo "        <div class=\"row-fluid\">
            <div class=\"responsive-block package-list\">
                ";
        // line 17
        echo twig_call_macro($macros["systeminfo"], "macro_deploymentVariables", [(isset($context["deploymentVariables"]) || array_key_exists("deploymentVariables", $context) ? $context["deploymentVariables"] : (function () { throw new RuntimeError('Variable "deploymentVariables" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    ";
        $context["deploymentSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
    ";
        // line 22
        ob_start();
        // line 23
        echo "        <div class=\"row-fluid\">
            <div class=\"responsive-block package-list\">
                <h3>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.caption.oro"), "html", null, true);
        echo "</h3>
                ";
        // line 26
        echo twig_call_macro($macros["systeminfo"], "macro_packagesTable", [(isset($context["oroPackages"]) || array_key_exists("oroPackages", $context) ? $context["oroPackages"] : (function () { throw new RuntimeError('Variable "oroPackages" does not exist.', 26, $this->source); })())], 26, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"responsive-block package-list\">
                <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.caption.thirdParty"), "html", null, true);
        echo "</h3>
                ";
        // line 30
        echo twig_call_macro($macros["systeminfo"], "macro_packagesTable", [(isset($context["thirdPartyPackages"]) || array_key_exists("thirdPartyPackages", $context) ? $context["thirdPartyPackages"] : (function () { throw new RuntimeError('Variable "thirdPartyPackages" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    ";
        $context["packagesSection"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
    ";
        // line 35
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.deployment_variables"), "class" => "active", "subblocks" => [0 => ["data" => [0 =>         // line 40
(isset($context["deploymentSection"]) || array_key_exists("deploymentSection", $context) ? $context["deploymentSection"] : (function () { throw new RuntimeError('Variable "deploymentSection" does not exist.', 40, $this->source); })())]]]], 1 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.packages"), "subblocks" => [0 => ["data" => [0 =>         // line 46
(isset($context["packagesSection"]) || array_key_exists("packagesSection", $context) ? $context["packagesSection"] : (function () { throw new RuntimeError('Variable "packagesSection" does not exist.', 46, $this->source); })())]]]]];
        // line 50
        echo "
    ";
        // line 51
        $context["id"] = "system_info";
        // line 52
        echo "    ";
        $context["data"] = ["dataBlocks" => (isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 52, $this->source); })())];
        // line 53
        echo "
    ";
        // line 54
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 57
    public function macro_packagesTable($__packages__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "packages" => $__packages__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "packagesTable"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "packagesTable"));

            // line 58
            echo "    ";
            if (twig_length_filter($this->env, (isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 58, $this->source); })()))) {
                // line 59
                echo "        <table class=\"table table-bordered table-striped \">
            <thead>
            <tr>
                <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.package.name"), "html", null, true);
                echo "</th>
                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.package.version"), "html", null, true);
                echo "</th>
                <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.package.license"), "html", null, true);
                echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 68, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                    // line 69
                    echo "                <tr>
                    <td>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "prettyName", [], "any", false, false, false, 70), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["package"], "prettyVersion", [], "any", false, false, false, 71), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "license", [], "any", false, false, false, 73));
                    foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                        // line 74
                        echo "                            ";
                        echo twig_escape_filter($this->env, $context["license"], "html", null, true);
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 82
                echo "        <div class=\"well\">
            ";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.platform.no_packages"), "html", null, true);
                echo "
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_deploymentVariables($__variables__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "variables" => $__variables__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deploymentVariables"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "deploymentVariables"));

            // line 89
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroPlatform/Platform/systemInfo.html.twig", 89)->unwrap();
            // line 90
            echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["variables"]) || array_key_exists("variables", $context) ? $context["variables"] : (function () { throw new RuntimeError('Variable "variables" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                // line 94
                echo "                    ";
                echo twig_call_macro($macros["UI"], "macro_renderProperty", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["variable"], "label", [], "any", false, false, false, 94)), ((twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", true, true, false, 94)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["variable"], "value", [], "any", false, false, false, 94), "N/A")) : ("N/A"))], 94, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </div>
        </div>
    </div>
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
        return "@OroPlatform/Platform/systemInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 96,  352 => 94,  348 => 93,  343 => 90,  340 => 89,  321 => 88,  302 => 83,  299 => 82,  294 => 79,  286 => 76,  277 => 74,  273 => 73,  268 => 71,  264 => 70,  261 => 69,  257 => 68,  250 => 64,  246 => 63,  242 => 62,  237 => 59,  234 => 58,  215 => 57,  200 => 54,  197 => 53,  194 => 52,  192 => 51,  189 => 50,  187 => 46,  186 => 40,  185 => 35,  182 => 34,  175 => 30,  171 => 29,  165 => 26,  161 => 25,  157 => 23,  155 => 22,  152 => 21,  145 => 17,  141 => 15,  139 => 14,  136 => 13,  133 => 12,  120 => 11,  96 => 9,  82 => 6,  69 => 5,  55 => 1,  53 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/view.html.twig' %}

{% set entity = null %}

{% block pageHeader %}
    {% include '@OroUI/page_title_block.html.twig' with { title: 'oro.platform.system_info'|trans } %}
{% endblock %}

{% block navButtons %}{% endblock navButtons %}

{% block content_data %}
    {% import _self as systeminfo %}

    {% set deploymentSection %}
        <div class=\"row-fluid\">
            <div class=\"responsive-block package-list\">
                {{ systeminfo.deploymentVariables(deploymentVariables) }}
            </div>
        </div>
    {% endset %}

    {% set packagesSection %}
        <div class=\"row-fluid\">
            <div class=\"responsive-block package-list\">
                <h3>{{ 'oro.platform.caption.oro'|trans }}</h3>
                {{ systeminfo.packagesTable(oroPackages) }}
            </div>
            <div class=\"responsive-block package-list\">
                <h3>{{ 'oro.platform.caption.thirdParty'|trans }}</h3>
                {{ systeminfo.packagesTable(thirdPartyPackages) }}
            </div>
        </div>
    {% endset %}

    {% set dataBlocks = [
        {
            'title': 'oro.platform.deployment_variables'|trans,
            'class': 'active',
            'subblocks': [
            {'data' : [deploymentSection]}
        ]
        },
        {
            'title': 'oro.platform.packages'|trans,
            'subblocks': [
                {'data' : [packagesSection]}
            ]
        }
    ] %}

    {% set id = 'system_info' %}
    {% set data = {'dataBlocks': dataBlocks} %}

    {{ parent() }}
{% endblock content_data %}

{% macro packagesTable(packages) %}
    {% if packages|length %}
        <table class=\"table table-bordered table-striped \">
            <thead>
            <tr>
                <th>{{ 'oro.platform.package.name'|trans }}</th>
                <th>{{ 'oro.platform.package.version'|trans }}</th>
                <th>{{ 'oro.platform.package.license'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for package in packages %}
                <tr>
                    <td>{{ package.prettyName }}</td>
                    <td>{{ package.prettyVersion }}</td>
                    <td>
                        {% for license in package.license %}
                            {{ license }}
                        {% endfor %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"well\">
            {{ 'oro.platform.no_packages'|trans }}
        </div>
    {% endif %}
{% endmacro %}

{% macro deploymentVariables(variables) %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                {% for variable in variables %}
                    {{ UI.renderProperty(variable.label|trans, variable.value|default('N/A')) }}
                {% endfor %}
            </div>
        </div>
    </div>
{% endmacro %}
", "@OroPlatform/Platform/systemInfo.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/PlatformBundle/Resources/views/Platform/systemInfo.html.twig");
    }
}
