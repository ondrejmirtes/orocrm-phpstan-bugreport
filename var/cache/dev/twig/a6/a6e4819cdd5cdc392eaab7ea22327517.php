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

/* @OroSecurity/Form/fields.html.twig */
class __TwigTemplate_57f4f4e4b11322bbc38b0c3da6c0a4d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'oro_acl_access_level_selector_widget' => [$this, 'block_oro_acl_access_level_selector_widget'],
            'oro_acl_privilege_identity_widget' => [$this, 'block_oro_acl_privilege_identity_widget'],
            'oro_acl_label_widget' => [$this, 'block_oro_acl_label_widget'],
            'oro_acl_object_name_widget' => [$this, 'block_oro_acl_object_name_widget'],
            'oro_acl_collection_widget' => [$this, 'block_oro_acl_collection_widget'],
            'oro_acl_privilege_widget' => [$this, 'block_oro_acl_privilege_widget'],
            'oro_acl_permission_widget' => [$this, 'block_oro_acl_permission_widget'],
            'oro_acl_permission_collection_widget' => [$this, 'block_oro_acl_permission_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSecurity/Form/fields.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSecurity/Form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSecurity/Form/fields.html.twig"));

        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_acl_privilege_identity_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 97
        echo "
";
        // line 98
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_access_level_selector_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_access_level_selector_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_access_level_selector_widget"));

        // line 2
        echo "    ";
        $context["additionalClass"] = "";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 3), "parent", [], "any", false, true, false, 3), "vars", [], "any", false, true, false, 3), "privileges_config", [], "any", false, true, false, 3), "view_type", [], "any", true, true, false, 3) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "parent", [], "any", false, false, false, 3), "parent", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "privileges_config", [], "any", false, false, false, 3), "view_type", [], "any", false, false, false, 3) != "grid"))) {
            // line 4
            echo "        ";
            $context["additionalClass"] = "span2";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["label"] = ((( !array_key_exists("level_label", $context) || twig_test_empty((isset($context["level_label"]) || array_key_exists("level_label", $context) ? $context["level_label"] : (function () { throw new RuntimeError('Variable "level_label" does not exist.', 6, $this->source); })())))) ? ((        // line 7
(isset($context["translation_prefix"]) || array_key_exists("translation_prefix", $context) ? $context["translation_prefix"] : (function () { throw new RuntimeError('Variable "translation_prefix" does not exist.', 7, $this->source); })()) . "NONE")) : ((        // line 8
(isset($context["translation_prefix"]) || array_key_exists("translation_prefix", $context) ? $context["translation_prefix"] : (function () { throw new RuntimeError('Variable "translation_prefix" does not exist.', 8, $this->source); })()) . (isset($context["level_label"]) || array_key_exists("level_label", $context) ? $context["level_label"] : (function () { throw new RuntimeError('Variable "level_label" does not exist.', 8, $this->source); })()))));
        // line 10
        echo "    <div class=\"access_level_value ";
        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) || array_key_exists("additionalClass", $context) ? $context["additionalClass"] : (function () { throw new RuntimeError('Variable "additionalClass" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"
         data-identity=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["identity"]) || array_key_exists("identity", $context) ? $context["identity"] : (function () { throw new RuntimeError('Variable "identity" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\"
         data-value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\"
    >
        <input type=\"hidden\" data-value-text=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 16, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 20
    public function block_oro_acl_privilege_identity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_privilege_identity_widget", $this->getTemplateName(), 20));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_privilege_identity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_privilege_identity_widget"));

        // line 21
        echo "    ";
        $context["class"] = "";
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 22), "vars", [], "any", false, true, false, 22), "privileges_config", [], "any", false, true, false, 22), "view_type", [], "any", true, true, false, 22) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "privileges_config", [], "any", false, false, false, 22), "view_type", [], "any", false, false, false, 22) != "grid"))) {
            // line 23
            echo "        ";
            $context["class"] = "span8";
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'widget', ["attr" => ["class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })())]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_oro_acl_label_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_label_widget", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_label_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_label_widget"));

        // line 30
        echo "    ";
        $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroSecurity/Form/fields.html.twig", 30)->unwrap();
        // line 31
        echo "    <strong>
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 32, $this->source); })())), "html", null, true);
        echo "
    </strong>
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "parent", [], "any", false, false, false, 34), "parent", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "description", [], "any", false, false, false, 34)) {
            // line 35
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_tooltip", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "parent", [], "any", false, false, false, 35), "parent", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35))], 35, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 37
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()), "hidden")) : ("hidden"));
        // line 38
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 41
    public function block_oro_acl_object_name_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_object_name_widget", $this->getTemplateName(), 41));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_object_name_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_object_name_widget"));

        // line 42
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "oid", [], "any", false, false, false, 42), 'widget');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 46
    public function block_oro_acl_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_collection_widget", $this->getTemplateName(), 46));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_collection_widget"));

        // line 47
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, (isset($context["page_component_module"]) || array_key_exists("page_component_module", $context) ? $context["page_component_module"] : (function () { throw new RuntimeError('Variable "page_component_module" does not exist.', 47, $this->source); })()));
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, json_encode((isset($context["page_component_options"]) || array_key_exists("page_component_options", $context) ? $context["page_component_options"] : (function () { throw new RuntimeError('Variable "page_component_options" does not exist.', 47, $this->source); })())));
        echo "\">
        ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, (isset($context["privileges_config"]) || array_key_exists("privileges_config", $context) ? $context["privileges_config"] : (function () { throw new RuntimeError('Variable "privileges_config" does not exist.', 48, $this->source); })()), "view_type", [], "any", false, false, false, 48) == "grid")) {
            // line 49
            echo "            <table class=\"table acl-table\">
                <tbody>
                <tr>
                    <th class=\"span6\">&nbsp;</th>
                    <th>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.security.permissions"), "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 56
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 62
                echo "                <div class=\"security-row row-fluid\">
                    ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        // line 67
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 70
    public function block_oro_acl_privilege_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_privilege_widget", $this->getTemplateName(), 70));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_privilege_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_privilege_widget"));

        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        <tr ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "value", [], "any", false, false, false, 72), "identity", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72) == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
            <td>
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "identity", [], "any", false, false, false, 74), 'widget');
        echo "
            </td>
            ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, (isset($context["privileges_config"]) || array_key_exists("privileges_config", $context) ? $context["privileges_config"] : (function () { throw new RuntimeError('Variable "privileges_config" does not exist.', 76, $this->source); })()), "view_type", [], "any", false, false, false, 76) == "grid")) {
            // line 77
            echo "                <td>
                    <div class=\"table-responsive\">
                        <table class=\"table table-condensed\">
                            <tbody>
                                ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "permissions", [], "any", false, false, false, 81), 'widget');
            echo "
                            </tbody>
                        </table>
                    </div>
                </td>
            ";
        } else {
            // line 87
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "permissions", [], "any", false, false, false, 87), 'widget');
            echo "
            ";
        }
        // line 89
        echo "        </tr>
    ";
        $___internal_parse_38_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 71
        echo twig_spaceless($___internal_parse_38_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 93
    public function block_oro_acl_permission_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_permission_widget", $this->getTemplateName(), 93));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_permission_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_permission_widget"));

        // line 94
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "accessLevel", [], "any", false, false, false, 94), 'widget');
        echo "
    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "name", [], "any", false, false, false, 95), 'widget');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 98
    public function block_oro_acl_permission_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("oro_acl_permission_collection_widget", $this->getTemplateName(), 98));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_permission_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "oro_acl_permission_collection_widget"));

        // line 99
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["privileges_config"]) || array_key_exists("privileges_config", $context) ? $context["privileges_config"] : (function () { throw new RuntimeError('Variable "privileges_config" does not exist.', 99, $this->source); })()), "permissions", [], "array", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 100
            echo "        <tr ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "parent", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100), "identity", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100) == "(default)")) {
                echo "class=\"default-field\"";
            }
            echo ">
            ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 102
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["permission"], "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102) == $context["field"])) {
                    // line 103
                    echo "                    <td class=\"span8\">
                        ";
                    // line 104
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["privileges_config"]) || array_key_exists("privileges_config", $context) ? $context["privileges_config"] : (function () { throw new RuntimeError('Variable "privileges_config" does not exist.', 104, $this->source); })()), "view_type", [], "any", false, false, false, 104) == "grid")) {
                        // line 105
                        echo "                            ";
                        $context["aclPermission"] = $this->extensions['Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension']->getPermission(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["permission"], "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105));
                        // line 106
                        echo "
                            ";
                        // line 107
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["aclPermission"] ?? null), "label", [], "any", true, true, false, 107)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["aclPermission"] ?? null), "label", [], "any", false, false, false, 107), $context["field"])) : ($context["field"]))), "html", null, true);
                        echo "
                            ";
                        // line 108
                        if (twig_get_attribute($this->env, $this->source, (isset($context["aclPermission"]) || array_key_exists("aclPermission", $context) ? $context["aclPermission"] : (function () { throw new RuntimeError('Variable "aclPermission" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108)) {
                            echo " (";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["aclPermission"]) || array_key_exists("aclPermission", $context) ? $context["aclPermission"] : (function () { throw new RuntimeError('Variable "aclPermission" does not exist.', 108, $this->source); })()), "description", [], "any", false, false, false, 108)), "html", null, true);
                            echo ")";
                        }
                        // line 109
                        echo "                        ";
                    }
                    // line 110
                    echo "                    </td>
                    <td>
                        ";
                    // line 112
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["permission"], 'widget');
                    echo "
                    </td>
                ";
                }
                // line 115
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSecurity/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  560 => 116,  554 => 115,  548 => 112,  544 => 110,  541 => 109,  535 => 108,  531 => 107,  528 => 106,  525 => 105,  523 => 104,  520 => 103,  517 => 102,  513 => 101,  506 => 100,  501 => 99,  488 => 98,  473 => 95,  468 => 94,  455 => 93,  442 => 71,  438 => 89,  432 => 87,  423 => 81,  417 => 77,  415 => 76,  410 => 74,  402 => 72,  399 => 71,  386 => 70,  372 => 67,  369 => 66,  360 => 63,  357 => 62,  352 => 61,  347 => 58,  338 => 56,  334 => 55,  329 => 53,  323 => 49,  321 => 48,  314 => 47,  301 => 46,  286 => 43,  281 => 42,  268 => 41,  252 => 38,  249 => 37,  243 => 35,  241 => 34,  236 => 32,  233 => 31,  230 => 30,  217 => 29,  202 => 26,  199 => 25,  196 => 24,  193 => 23,  190 => 22,  187 => 21,  174 => 20,  154 => 16,  149 => 14,  145 => 13,  141 => 12,  137 => 11,  132 => 10,  130 => 8,  129 => 7,  127 => 6,  124 => 5,  121 => 4,  118 => 3,  115 => 2,  102 => 1,  89 => 98,  86 => 97,  84 => 93,  81 => 92,  79 => 70,  76 => 69,  74 => 46,  71 => 45,  69 => 41,  66 => 40,  64 => 29,  61 => 28,  59 => 20,  56 => 19,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block oro_acl_access_level_selector_widget %}
    {% set additionalClass = '' %}
    {% if form.parent.parent.vars.privileges_config.view_type is defined and form.parent.parent.vars.privileges_config.view_type != 'grid' %}
        {% set additionalClass = 'span2' %}
    {% endif %}
    {% set label = level_label is not defined or level_label is empty ?
        translation_prefix ~ 'NONE' :
        translation_prefix ~ level_label
    %}
    <div class=\"access_level_value {{ additionalClass }}\"
         data-identity=\"{{ identity }}\"
         data-selector-id=\"{{ id }}\"
         data-selector-name=\"{{ full_name }}\"
         data-value=\"{{ value }}\"
    >
        <input type=\"hidden\" data-value-text=\"{{ label|trans({}, translation_domain) }}\" name=\"{{ full_name }}\" value=\"{{ value }}\">
    </div>
{% endblock %}

{% block oro_acl_privilege_identity_widget %}
    {% set class = '' %}
    {% if form.parent.vars.privileges_config.view_type is defined and form.parent.vars.privileges_config.view_type != 'grid' %}
        {% set class = 'span8' %}
    {% endif %}

    {{ form_widget(form, {'attr': {'class': class}}) }}
{% endblock %}

{% block oro_acl_label_widget %}
    {% import '@OroUI/macros.html.twig' as UI %}
    <strong>
        {{ value|trans }}
    </strong>
    {% if form.parent.parent.vars.value.description %}
        {{ UI.tooltip(form.parent.parent.vars.value.description|trans) }}
    {% endif %}
    {% set type = type|default('hidden') %}
    {{ block('form_widget_simple') }}
{% endblock %}

{% block oro_acl_object_name_widget %}
    {{ form_widget(form.oid) }}
    {{ form_widget(form.name) }}
{% endblock %}

{% block oro_acl_collection_widget %}
    <div data-page-component-module=\"{{ page_component_module|escape }}\" data-page-component-options=\"{{ page_component_options|json_encode|escape }}\">
        {% if privileges_config.view_type == 'grid' %}
            <table class=\"table acl-table\">
                <tbody>
                <tr>
                    <th class=\"span6\">&nbsp;</th>
                    <th>{{'oro.security.permissions'|trans }}</th>
                </tr>
                {% for child in form %}
                    {{ form_widget(child) }}
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            {% for child in form %}
                <div class=\"security-row row-fluid\">
                    {{ form_widget(child) }}
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}

{% block oro_acl_privilege_widget %}
    {% apply spaceless %}
        <tr {% if form.vars.value.identity.name == \"(default)\" %}class=\"default-field\"{% endif %}>
            <td>
                {{ form_widget(form.identity) }}
            </td>
            {% if privileges_config.view_type == 'grid' %}
                <td>
                    <div class=\"table-responsive\">
                        <table class=\"table table-condensed\">
                            <tbody>
                                {{ form_widget(form.permissions) }}
                            </tbody>
                        </table>
                    </div>
                </td>
            {% else %}
                {{ form_widget(form.permissions) }}
            {% endif %}
        </tr>
    {% endapply %}
{% endblock %}

{% block oro_acl_permission_widget %}
    {{ form_widget(form.accessLevel) }}
    {{ form_widget(form.name) }}
{% endblock %}

{% block oro_acl_permission_collection_widget %}
    {% for field in privileges_config['permissions'] %}
        <tr {% if form.parent.vars.value.identity.name == \"(default)\" %}class=\"default-field\"{% endif %}>
            {% for permission in form %}
                {% if permission.vars.value.name == field %}
                    <td class=\"span8\">
                        {% if privileges_config.view_type == 'grid' %}
                            {% set aclPermission = acl_permission(permission.vars.value) %}

                            {{ aclPermission.label|default(field)|trans }}
                            {% if aclPermission.description %} ({{ aclPermission.description|trans }}){% endif %}
                        {% endif %}
                    </td>
                    <td>
                        {{ form_widget(permission) }}
                    </td>
                {% endif %}
            {% endfor %}
        </tr>
    {% endfor %}
{% endblock %}
", "@OroSecurity/Form/fields.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SecurityBundle/Resources/views/Form/fields.html.twig");
    }
}
