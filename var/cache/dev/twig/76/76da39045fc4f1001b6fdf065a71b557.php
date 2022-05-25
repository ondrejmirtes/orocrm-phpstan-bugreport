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

/* @OroOAuth2Server/Client/create.html.twig */
class __TwigTemplate_fdb60b23addd09af9bb8d50082d6cc9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navButtons' => [$this, 'block_navButtons'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'content_data' => [$this, 'block_content_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroUI/actions/update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroOAuth2Server/Client/create.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroOAuth2Server/Client/create.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroOAuth2Server/Client/create.html.twig", 2)->unwrap();

        $this->env->getExtension("Oro\Bundle\NavigationBundle\Twig\TitleExtension")->set(["params" => ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.oauth2server.client.entity_label")]]);
        // line 1
        $this->parent = $this->loadTemplate("@OroUI/actions/update.html.twig", "@OroOAuth2Server/Client/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_navButtons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("navButtons", $this->getTemplateName(), 10));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navButtons"));

        // line 11
        echo "    ";
        $this->displayParentBlock("navButtons", $context, $blocks);
        echo "

    ";
        // line 13
        echo twig_call_macro($macros["UI"], "macro_cancelButton", [$this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "data", [], "any", false, false, false, 13), "frontend", [], "any", false, false, false, 13)) ? ("oro_oauth2_frontend_index") : ("oro_oauth2_index")))], 13, $context, $this->getSourceContext());
        echo "

    ";
        // line 15
        $context["html"] = twig_call_macro($macros["UI"], "macro_saveAndCloseButton", [["route" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "frontend", [], "any", false, false, false, 16)) ? ("oro_oauth2_frontend_view") : ("oro_oauth2_view")), "params" => ["id" => "\$id"]]], 15, $context, $this->getSourceContext());
        // line 19
        echo "
    ";
        // line 20
        echo twig_call_macro($macros["UI"], "macro_dropdownSaveButton", [["html" => (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 20, $this->source); })())]], 20, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 23
    public function block_pageHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("pageHeader", $this->getTemplateName(), 23));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 24
        echo "    ";
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.ui.create_entity", ["%entityName%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "data", [], "any", false, false, false, 25), "frontend", [], "any", false, false, false, 25)) ? ("oro.oauth2server.client.entity_frontend_label") : ("oro.oauth2server.client.entity_label")))]);
        // line 30
        echo "    ";
        $this->loadTemplate("@OroUI/page_title_block.html.twig", "@OroOAuth2Server/Client/create.html.twig", 30)->display(twig_array_merge($context, ["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 30, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 33
    public function block_content_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("content_data", $this->getTemplateName(), 33));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_data"));

        // line 34
        echo "    ";
        $context["id"] = "oauth-application";
        // line 35
        echo "
    ";
        // line 36
        ob_start();
        // line 37
        echo "        ";
        if (twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "grants", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "block_prefixes", [], "any", false, false, false, 37))) {
            // line 38
            echo "            <div data-validation-ignore=\"true\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "grants", [], "any", false, false, false, 38), 'row');
            echo "</div>
        ";
        } else {
            // line 40
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "grants", [], "any", false, false, false, 40), 'row', ["group_attr" => ["class" => "client-grants"]]);
            echo "
        ";
        }
        // line 42
        echo "    ";
        $context["grantsRow"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
    ";
        // line 44
        $context["dataBlocks"] = [0 => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "subblocks" => [0 => ["title" => "", "data" => [0 => ((twig_get_attribute($this->env, $this->source,         // line 50
($context["form"] ?? null), "organization", [], "any", true, true, false, 50)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "organization", [], "any", false, false, false, 50), 'row')) : ("")), 1 =>         // line 51
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'row'), 2 =>         // line 52
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "active", [], "any", false, false, false, 52), 'row'), 3 =>         // line 53
(isset($context["grantsRow"]) || array_key_exists("grantsRow", $context) ? $context["grantsRow"] : (function () { throw new RuntimeError('Variable "grantsRow" does not exist.', 53, $this->source); })()), 4 => ((twig_get_attribute($this->env, $this->source,         // line 54
($context["form"] ?? null), "redirectUris", [], "any", true, true, false, 54)) ? (        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "redirectUris", [], "any", false, false, false, 54), 'form_row_collection', ["group_attr" => ["id" => "client-redirect-uris", "class" => "hide"]])) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 55
($context["form"] ?? null), "owner", [], "any", true, true, false, 55)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "owner", [], "any", false, false, false, 55), 'row', ["group_attr" => ["id" => "client-owner", "class" => "hide"]])) : (""))]]]]];
        // line 60
        echo "
    ";
        // line 61
        $context["data"] = ["formErrors" => ((        // line 62
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'errors')) : (null)), "dataBlocks" =>         // line 63
(isset($context["dataBlocks"]) || array_key_exists("dataBlocks", $context) ? $context["dataBlocks"] : (function () { throw new RuntimeError('Variable "dataBlocks" does not exist.', 63, $this->source); })())];
        // line 65
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "

    ";
        // line 67
        $context["options"] = ["ownerField" => "#client-owner", "redirectUrisField" => "#client-redirect-uris", "_sourceElement" => ".client-grants input:radio"];
        // line 72
        echo "    <div ";
        echo twig_call_macro($macros["UI"], "macro_renderPageComponentAttributes", [["view" => "orooauth2server/js/views/client-grant-view", "options" =>         // line 74
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 74, $this->source); })())]], 72, $context, $this->getSourceContext());
        // line 75
        echo "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroOAuth2Server/Client/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 75,  214 => 74,  212 => 72,  210 => 67,  204 => 65,  202 => 63,  201 => 62,  200 => 61,  197 => 60,  195 => 55,  194 => 54,  193 => 53,  192 => 52,  191 => 51,  190 => 50,  189 => 44,  186 => 43,  183 => 42,  177 => 40,  171 => 38,  168 => 37,  166 => 36,  163 => 35,  160 => 34,  147 => 33,  133 => 30,  131 => 25,  129 => 24,  116 => 23,  101 => 20,  98 => 19,  96 => 16,  95 => 15,  90 => 13,  84 => 11,  71 => 10,  57 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroUI/actions/update.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}

{% oro_title_set({
    params : {
        \"%entityName%\": 'oro.oauth2server.client.entity_label'|trans
    }
}) %}

{% block navButtons %}
    {{ parent() }}

    {{ UI.cancelButton(path(form.vars.data.frontend ? 'oro_oauth2_frontend_index' : 'oro_oauth2_index')) }}

    {% set html = UI.saveAndCloseButton({
        'route': form.vars.data.frontend ? 'oro_oauth2_frontend_view' : 'oro_oauth2_view',
        'params': {'id': '\$id'}
    }) %}

    {{ UI.dropdownSaveButton({'html': html}) }}
{% endblock navButtons %}

{% block pageHeader %}
    {% set title = 'oro.ui.create_entity'|trans({'%entityName%':
        (form.vars.data.frontend
            ? 'oro.oauth2server.client.entity_frontend_label'
            : 'oro.oauth2server.client.entity_label'
        )|trans
    }) %}
    {% include '@OroUI/page_title_block.html.twig' with { title: title } %}
{% endblock pageHeader %}

{% block content_data %}
    {% set id = 'oauth-application' %}

    {% set grantsRow %}
        {% if 'hidden' in form.grants.vars.block_prefixes %}
            <div data-validation-ignore=\"true\">{{ form_row(form.grants) }}</div>
        {% else %}
            {{ form_row(form.grants, {'group_attr': {'class': 'client-grants'}}) }}
        {% endif %}
    {% endset %}

    {% set dataBlocks = [{
        'title': 'General'|trans,
        'subblocks': [
            {
                'title': '',
                'data': [
                    form.organization is defined ? form_row(form.organization) : '',
                    form_row(form.name),
                    form_row(form.active),
                    grantsRow,
                    form.redirectUris is defined ? form_row_collection(form.redirectUris, {'group_attr': {'id': 'client-redirect-uris', 'class': 'hide'}}) : '',
                    form.owner is defined ? form_row(form.owner, {'group_attr': {'id': 'client-owner', 'class': 'hide'}}) : ''
                ]
            }
        ]
    }] %}

    {% set data = {
        'formErrors': form_errors(form) ? form_errors(form) : null,
        'dataBlocks': dataBlocks
    } %}
    {{ parent() }}

    {% set options = {
        ownerField: '#client-owner',
        redirectUrisField: '#client-redirect-uris',
        _sourceElement: '.client-grants input:radio',
    } %}
    <div {{ UI.renderPageComponentAttributes({
        view: 'orooauth2server/js/views/client-grant-view',
        options: options
    }) }}></div>
{% endblock content_data %}
", "@OroOAuth2Server/Client/create.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/oauth2-server/src/Oro/Bundle/OAuth2ServerBundle/Resources/views/Client/create.html.twig");
    }
}
