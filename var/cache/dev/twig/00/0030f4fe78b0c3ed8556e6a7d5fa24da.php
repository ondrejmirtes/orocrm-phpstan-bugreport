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

/* @OroLayout/Layout/div_layout.html.twig */
class __TwigTemplate_e2a7baefddcf620de542346e944d4c1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_widget' => [$this, 'block_block_widget'],
            'block_label' => [$this, 'block_block_label'],
            'block_row' => [$this, 'block_block_row'],
            'block_attributes' => [$this, 'block_block_attributes'],
            'block_attributes_base' => [$this, 'block_block_attributes_base'],
            'block_label_attributes' => [$this, 'block_block_label_attributes'],
            'icon_block' => [$this, 'block_icon_block'],
            'input_widget' => [$this, 'block_input_widget'],
            'container_widget' => [$this, 'block_container_widget'],
            'root_widget' => [$this, 'block_root_widget'],
            'head_widget' => [$this, 'block_head_widget'],
            'title_widget' => [$this, 'block_title_widget'],
            'page_title_widget' => [$this, 'block_page_title_widget'],
            'meta_widget' => [$this, 'block_meta_widget'],
            'script_widget' => [$this, 'block_script_widget'],
            'style_widget' => [$this, 'block_style_widget'],
            'body_widget' => [$this, 'block_body_widget'],
            'form_start_widget' => [$this, 'block_form_start_widget'],
            'form_fields_widget' => [$this, 'block_form_fields_widget'],
            'form_end_widget' => [$this, 'block_form_end_widget'],
            'form_field_widget' => [$this, 'block_form_field_widget'],
            'form_errors_widget' => [$this, 'block_form_errors_widget'],
            'fieldset_widget' => [$this, 'block_fieldset_widget'],
            'text_widget' => [$this, 'block_text_widget'],
            'link_widget' => [$this, 'block_link_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'button_widget_input' => [$this, 'block_button_widget_input'],
            'button_widget_button' => [$this, 'block_button_widget_button'],
            'external_resource_widget' => [$this, 'block_external_resource_widget'],
            'list_widget' => [$this, 'block_list_widget'],
            'ordered_list_widget' => [$this, 'block_ordered_list_widget'],
            'list_item_widget' => [$this, 'block_list_item_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroLayout/Layout/div_layout.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Layout/div_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroLayout/Layout/div_layout.html.twig"));

        // line 1
        $this->displayBlock('block_widget', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('block_label', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('block_row', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('block_attributes', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('block_attributes_base', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('block_label_attributes', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('icon_block', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('input_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('container_widget', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('root_widget', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('head_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('title_widget', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('page_title_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('meta_widget', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('script_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('style_widget', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('body_widget', $context, $blocks);
        // line 261
        echo "
";
        // line 262
        $this->displayBlock('form_start_widget', $context, $blocks);
        // line 299
        echo "
";
        // line 300
        $this->displayBlock('form_fields_widget', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('form_end_widget', $context, $blocks);
        // line 310
        echo "
";
        // line 311
        $this->displayBlock('form_field_widget', $context, $blocks);
        // line 314
        echo "
";
        // line 315
        $this->displayBlock('form_errors_widget', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('fieldset_widget', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('text_widget', $context, $blocks);
        // line 337
        echo "
";
        // line 338
        $this->displayBlock('link_widget', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('button_widget', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('button_widget_input', $context, $blocks);
        // line 363
        echo "
";
        // line 364
        $this->displayBlock('button_widget_button', $context, $blocks);
        // line 375
        echo "
";
        // line 376
        $this->displayBlock('external_resource_widget', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('list_widget', $context, $blocks);
        // line 412
        echo "
";
        // line 413
        $this->displayBlock('ordered_list_widget', $context, $blocks);
        // line 440
        echo "
";
        // line 441
        $this->displayBlock('list_item_widget', $context, $blocks);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_block_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_widget", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_widget"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 4
    public function block_block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_label", $this->getTemplateName(), 4));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_label"));

        // line 5
        if ((array_key_exists("label", $context) &&  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()) === false))) {
            // line 6
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 6, $this->source); })()))) {
                // line 7
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()));
            }
            // line 9
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 10, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " required"))]);
            }
            // line 12
            echo "<label";
            $this->displayBlock("block_label_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 12, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 12, $this->source); })())), "html", null, true);
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })())) {
                echo "<em aria-hidden=\"true\">*</em>";
            }
            echo "</label>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 16
    public function block_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_row", $this->getTemplateName(), 16));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_row"));

        // line 17
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 17, $this->source); })()), 'label');
        // line 18
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 18, $this->source); })()), 'widget');
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_attributes", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_attributes"));

        // line 22
        $context["renderer"] = "block_attributes_base";
        // line 23
        if (array_key_exists("attr_renderer", $context)) {
            // line 24
            $context["renderer"] = (isset($context["attr_renderer"]) || array_key_exists("attr_renderer", $context) ? $context["attr_renderer"] : (function () { throw new RuntimeError('Variable "attr_renderer" does not exist.', 24, $this->source); })());
        }
        // line 26
        $this->displayBlock((isset($context["renderer"]) || array_key_exists("renderer", $context) ? $context["renderer"] : (function () { throw new RuntimeError('Variable "renderer" does not exist.', 26, $this->source); })()), $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 29
    public function block_block_attributes_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_attributes_base", $this->getTemplateName(), 29));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_attributes_base"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_attributes_base"));

        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 30)) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["class" => twig_replace_filter(twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 32, $this->source); })()), "class", [], "any", false, false, false, 32), ["{{ class_prefix }}" => (isset($context["class_prefix"]) || array_key_exists("class_prefix", $context) ? $context["class_prefix"] : (function () { throw new RuntimeError('Variable "class_prefix" does not exist.', 32, $this->source); })())])]);
        }
        // line 35
        if ((isset($context["hidden"]) || array_key_exists("hidden", $context) ? $context["hidden"] : (function () { throw new RuntimeError('Variable "hidden" does not exist.', 35, $this->source); })())) {
            // line 36
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), ["class" => (((twig_get_attribute($this->env, $this->source,             // line 37
($context["attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " hidden")]);
        }
        // line 40
        $context["attributesThatContainsUri"] = [0 => "src", 1 => "href", 2 => "action", 3 => "cite", 4 => "data", 5 => "poster"];
        // line 41
        echo "    ";
        $context["attributesThatNeedToTranslate"] = [0 => "title", 1 => "aria-label"];
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 43
            if (twig_test_iterable($context["attrvalue"])) {
                // line 44
                $context["attrvalue"] = json_encode($context["attrvalue"]);
            }
            // line 46
            if (twig_in_filter($context["attrname"], (isset($context["attributesThatNeedToTranslate"]) || array_key_exists("attributesThatNeedToTranslate", $context) ? $context["attributesThatNeedToTranslate"] : (function () { throw new RuntimeError('Variable "attributesThatNeedToTranslate" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText($context["attrvalue"], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 47, $this->source); })())), "html_attr");
                echo "\"
        ";
            } elseif (twig_in_filter(            // line 48
$context["attrname"], (isset($context["attributesThatContainsUri"]) || array_key_exists("attributesThatContainsUri", $context) ? $context["attributesThatContainsUri"] : (function () { throw new RuntimeError('Variable "attributesThatContainsUri" does not exist.', 48, $this->source); })()))) {
                // line 49
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_replace_filter(twig_escape_filter($this->env, $context["attrvalue"], "html"), ["&amp;" => "&"]);
                echo "\"
        ";
            } else {
                // line 51
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 56
    public function block_block_label_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("block_label_attributes", $this->getTemplateName(), 56));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_label_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_label_attributes"));

        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 57)) {
            // line 58
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 58, $this->source); })()), ["class" => twig_replace_filter(twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 59, $this->source); })()), "class", [], "any", false, false, false, 59), ["{{ class_prefix }}" => (isset($context["class_prefix"]) || array_key_exists("class_prefix", $context) ? $context["class_prefix"] : (function () { throw new RuntimeError('Variable "class_prefix" does not exist.', 59, $this->source); })())])]);
        }
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 63
            if (($context["attrname"] === "title")) {
                // line 64
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText($context["attrvalue"], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 64, $this->source); })())), "html", null, true);
                echo "\"
        ";
            } else {
                // line 66
                echo twig_escape_filter($this->env, (" " . $context["attrname"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 71
    public function block_icon_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("icon_block", $this->getTemplateName(), 71));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_block"));

        // line 72
        echo "<i class=\"fa-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 72, $this->source); })()), "html", null, true);
        if (array_key_exists("icon_class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["icon_class"]) || array_key_exists("icon_class", $context) ? $context["icon_class"] : (function () { throw new RuntimeError('Variable "icon_class" does not exist.', 72, $this->source); })()), "html", null, true);
        }
        echo "\"></i>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 75
    public function block_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("input_widget", $this->getTemplateName(), 75));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_widget"));

        // line 76
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 76, $this->source); })()), ["type" =>         // line 77
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 77, $this->source); })())]);
        // line 79
        echo "
    ";
        // line 80
        if (array_key_exists("name", $context)) {
            // line 81
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 81, $this->source); })()), ["name" =>             // line 82
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 82, $this->source); })())]);
            // line 84
            echo "    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if (array_key_exists("placeholder", $context)) {
            // line 87
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 87, $this->source); })()), ["placeholder" => $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText(            // line 88
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 88, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 88, $this->source); })()))]);
            // line 90
            echo "    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if (array_key_exists("value", $context)) {
            // line 93
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 93, $this->source); })()), ["value" =>             // line 94
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 94, $this->source); })())]);
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 98, $this->source); })()) == "password") &&  !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "autocomplete", [], "any", true, true, false, 98))) {
            // line 99
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 99, $this->source); })()), ["autocomplete" => "off"]);
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    <input";
        // line 104
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "/>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 107
    public function block_container_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("container_widget", $this->getTemplateName(), 107));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container_widget"));

        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 109
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 109), "visible", [], "any", false, false, false, 109)) {
                // line 110
                echo "            ";
                echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 115
    public function block_root_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("root_widget", $this->getTemplateName(), 115));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root_widget"));

        // line 116
        echo "<!DOCTYPE ";
        echo twig_escape_filter($this->env, ((array_key_exists("doctype", $context)) ? (_twig_default_filter((isset($context["doctype"]) || array_key_exists("doctype", $context) ? $context["doctype"] : (function () { throw new RuntimeError('Variable "doctype" does not exist.', 116, $this->source); })()), "html")) : ("html")), "html", null, true);
        echo ">
<html>
    ";
        // line 118
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 118, $this->source); })()), 'widget');
        echo "
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 122
    public function block_head_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("head_widget", $this->getTemplateName(), 122));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_widget"));

        // line 123
        echo "    <head";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 124
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 124, $this->source); })()), 'widget');
        echo "
    </head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 128
    public function block_title_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("title_widget", $this->getTemplateName(), 128));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_widget"));

        // line 129
        ob_start();
        // line 130
        echo "        <title>";
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 130, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 130, $this->source); })())), "html", null, true);
        echo "</title>
    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 129
        echo twig_spaceless($___internal_parse_1_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 134
    public function block_page_title_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("page_title_widget", $this->getTemplateName(), 134));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title_widget"));

        // line 135
        ob_start();
        // line 136
        echo "        ";
        $context["value"] = $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 136, $this->source); })()));
        // line 137
        echo "        ";
        if (twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 137, $this->source); })()))) {
            // line 138
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 140
        echo "    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 135
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 143
    public function block_meta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("meta_widget", $this->getTemplateName(), 143));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_widget"));

        // line 144
        echo "    ";
        if (array_key_exists("charset", $context)) {
            // line 145
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 145, $this->source); })()), ["charset" =>             // line 146
(isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 146, $this->source); })())]);
            // line 148
            echo "    ";
        }
        // line 149
        echo "
    ";
        // line 150
        if (array_key_exists("content", $context)) {
            // line 151
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 151, $this->source); })()), ["content" =>             // line 152
(isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 152, $this->source); })())]);
            // line 154
            echo "    ";
        }
        // line 155
        echo "
    ";
        // line 156
        if (array_key_exists("http_equiv", $context)) {
            // line 157
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 157, $this->source); })()), ["http_equiv" =>             // line 158
(isset($context["http_equiv"]) || array_key_exists("http_equiv", $context) ? $context["http_equiv"] : (function () { throw new RuntimeError('Variable "http_equiv" does not exist.', 158, $this->source); })())]);
            // line 160
            echo "    ";
        }
        // line 161
        echo "
    ";
        // line 162
        if (array_key_exists("name", $context)) {
            // line 163
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 163, $this->source); })()), ["name" =>             // line 164
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 164, $this->source); })())]);
            // line 166
            echo "    ";
        }
        // line 167
        echo "
    ";
        // line 168
        ob_start();
        // line 169
        echo "        <meta";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "/>
    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 168
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 173
    public function block_script_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("script_widget", $this->getTemplateName(), 173));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script_widget"));

        // line 174
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 174, $this->source); })()), ["type" =>         // line 175
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 175, $this->source); })())]);
        // line 177
        echo "
    ";
        // line 178
        if (array_key_exists("src", $context)) {
            // line 179
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 179, $this->source); })()), ["src" =>             // line 180
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 180, $this->source); })())]);
            // line 182
            echo "    ";
        }
        // line 183
        echo "
    ";
        // line 184
        if (((isset($context["async"]) || array_key_exists("async", $context) ? $context["async"] : (function () { throw new RuntimeError('Variable "async" does not exist.', 184, $this->source); })()) != false)) {
            // line 185
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 185, $this->source); })()), ["async" => "async"]);
            // line 188
            echo "    ";
        }
        // line 189
        echo "
    ";
        // line 190
        if (((isset($context["defer"]) || array_key_exists("defer", $context) ? $context["defer"] : (function () { throw new RuntimeError('Variable "defer" does not exist.', 190, $this->source); })()) != false)) {
            // line 191
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 191, $this->source); })()), ["defer" => "defer"]);
            // line 194
            echo "    ";
        }
        // line 195
        echo "
    ";
        // line 196
        if (array_key_exists("crossorigin", $context)) {
            // line 197
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 197, $this->source); })()), ["crossorigin" =>             // line 198
(isset($context["crossorigin"]) || array_key_exists("crossorigin", $context) ? $context["crossorigin"] : (function () { throw new RuntimeError('Variable "crossorigin" does not exist.', 198, $this->source); })())]);
            // line 200
            echo "    ";
        }
        // line 201
        echo "
    ";
        // line 202
        ob_start();
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "src", [], "any", true, true, false, 203) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 203, $this->source); })()), "src", [], "any", false, false, false, 203)))) {
            // line 204
            echo "<script";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo "></script>
        ";
        } else {
            // line 206
            echo "            <script";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
                ";
            // line 207
            echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 207, $this->source); })());
            echo "
            </script>";
        }
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 202
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 213
    public function block_style_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("style_widget", $this->getTemplateName(), 213));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_widget"));

        // line 214
        echo "    ";
        if (array_key_exists("type", $context)) {
            // line 215
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 215, $this->source); })()), ["type" =>             // line 216
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 216, $this->source); })())]);
            // line 218
            echo "    ";
        }
        // line 219
        echo "
    ";
        // line 220
        if (array_key_exists("media", $context)) {
            // line 221
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 221, $this->source); })()), ["media" =>             // line 222
(isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 222, $this->source); })())]);
            // line 224
            echo "    ";
        }
        // line 225
        echo "
    ";
        // line 226
        if (array_key_exists("disabled", $context)) {
            // line 227
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 227, $this->source); })()), ["disabled" => "disabled"]);
            // line 230
            echo "    ";
        }
        // line 231
        echo "
    ";
        // line 232
        if (((isset($context["scoped"]) || array_key_exists("scoped", $context) ? $context["scoped"] : (function () { throw new RuntimeError('Variable "scoped" does not exist.', 232, $this->source); })()) != false)) {
            // line 233
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 233, $this->source); })()), ["scoped" => "scoped"]);
            // line 236
            echo "    ";
        }
        // line 237
        echo "
    ";
        // line 238
        if (array_key_exists("crossorigin", $context)) {
            // line 239
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 239, $this->source); })()), ["crossorigin" =>             // line 240
(isset($context["crossorigin"]) || array_key_exists("crossorigin", $context) ? $context["crossorigin"] : (function () { throw new RuntimeError('Variable "crossorigin" does not exist.', 240, $this->source); })())]);
            // line 242
            echo "    ";
        }
        // line 243
        echo "
    ";
        // line 244
        ob_start();
        // line 245
        if ((array_key_exists("src", $context) &&  !twig_test_empty((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 245, $this->source); })())))) {
            // line 246
            $macros["Asset"] = $this->loadTemplate("@OroAsset/Asset.html.twig", "@OroLayout/Layout/div_layout.html.twig", 246)->unwrap();
            // line 247
            echo "            ";
            echo twig_call_macro($macros["Asset"], "macro_css", [(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 247, $this->source); })()),             $this->renderBlock("block_attributes", $context, $blocks)], 247, $context, $this->getSourceContext());
            echo "
        ";
        } else {
            // line 249
            echo "            <style";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
                ";
            // line 250
            echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 250, $this->source); })());
            echo "
            </style>";
        }
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 244
        echo twig_spaceless($___internal_parse_5_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 256
    public function block_body_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("body_widget", $this->getTemplateName(), 256));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_widget"));

        // line 257
        echo "    <body";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 258
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 258, $this->source); })()), 'widget');
        echo "
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 262
    public function block_form_start_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_start_widget", $this->getTemplateName(), 262));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start_widget"));

        // line 263
        echo "    ";
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "vars", [], "any", false, false, false, 263), "attr", [], "any", false, false, false, 263), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 263, $this->source); })()));
        // line 264
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "id", [], "any", true, true, false, 264)) {
            // line 265
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 266
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "vars", [], "any", false, false, false, 266), "id", [], "any", false, false, false, 266)]);
            // line 268
            echo "    ";
        }
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 270
            if (twig_test_iterable($context["attrvalue"])) {
                // line 271
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 271, $this->source); })()), [                // line 272
$context["attrname"] => json_encode($context["attrvalue"])]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        $context["options"] = ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 277, $this->source); })())];
        // line 278
        echo "    ";
        $context["action"] = ((array_key_exists("form_action", $context)) ? ((isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 278, $this->source); })())) : (((array_key_exists("form_route_name", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["form_route_name"]) || array_key_exists("form_route_name", $context) ? $context["form_route_name"] : (function () { throw new RuntimeError('Variable "form_route_name" does not exist.', 278, $this->source); })()), (isset($context["form_route_parameters"]) || array_key_exists("form_route_parameters", $context) ? $context["form_route_parameters"] : (function () { throw new RuntimeError('Variable "form_route_parameters" does not exist.', 278, $this->source); })()))) : (null))));
        // line 279
        if ( !((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 279, $this->source); })()) === null)) {
            // line 280
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 280, $this->source); })()), ["action" => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 280, $this->source); })())]);
            // line 281
            echo "    ";
        }
        // line 282
        echo "
    ";
        // line 283
        if (array_key_exists("form_method", $context)) {
            // line 284
            echo "        ";
            if (!twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 284, $this->source); })()), [0 => "GET", 1 => "POST"])) {
                // line 285
                $context["form_method"] = "POST";
            }
            // line 287
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 287, $this->source); })()), ["method" => (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new RuntimeError('Variable "form_method" does not exist.', 287, $this->source); })())]);
            // line 288
            echo "    ";
        }
        // line 289
        echo "
    ";
        // line 290
        if (array_key_exists("form_multipart", $context)) {
            // line 291
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 291, $this->source); })()), ["multipart" => (isset($context["form_multipart"]) || array_key_exists("form_multipart", $context) ? $context["form_multipart"] : (function () { throw new RuntimeError('Variable "form_multipart" does not exist.', 291, $this->source); })())]);
            // line 292
            echo "    ";
        }
        // line 293
        echo "
    ";
        // line 294
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), 'form_start', (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 294, $this->source); })()));
        // line 295
        if (array_key_exists("form_method", $context)) {
            // line 296
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 296, $this->source); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 300
    public function block_form_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_fields_widget", $this->getTemplateName(), 300));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_fields_widget"));

        // line 301
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), 'widget');
        echo "
    ";
        // line 302
        if ((isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new RuntimeError('Variable "render_rest" does not exist.', 302, $this->source); })())) {
            // line 303
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), 'rest');
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 307
    public function block_form_end_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_end_widget", $this->getTemplateName(), 307));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_end_widget"));

        // line 308
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), 'form_end', ["render_rest" => (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new RuntimeError('Variable "render_rest" does not exist.', 308, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 311
    public function block_form_field_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_field_widget", $this->getTemplateName(), 311));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_field_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_field_widget"));

        // line 312
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), 'row');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 315
    public function block_form_errors_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("form_errors_widget", $this->getTemplateName(), 315));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_widget"));

        // line 316
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 316, $this->source); })()), "vars", [], "any", false, false, false, 316), "errors", [], "any", false, false, false, 316)) > 0)) {
            // line 317
            echo "        <div";
            $this->displayBlock("block_attributes", $context, $blocks);
            echo ">
            ";
            // line 318
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), 'errors');
            echo "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 323
    public function block_fieldset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("fieldset_widget", $this->getTemplateName(), 323));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fieldset_widget"));

        // line 324
        echo "    <fieldset";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        <legend>";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 325, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 325, $this->source); })())), "html", null, true);
        echo "</legend>
        ";
        // line 326
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 326, $this->source); })()), 'widget');
        echo "
    </fieldset>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 330
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("text_widget", $this->getTemplateName(), 330));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 331
        if ((isset($context["escape"]) || array_key_exists("escape", $context) ? $context["escape"] : (function () { throw new RuntimeError('Variable "escape" does not exist.', 331, $this->source); })())) {
            // line 332
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 332, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 332, $this->source); })())), "html", null, true);
        } else {
            // line 334
            echo $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 334, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 334, $this->source); })()));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 338
    public function block_link_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("link_widget", $this->getTemplateName(), 338));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_widget"));

        // line 339
        ob_start();
        // line 340
        echo "        <a";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo " href=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("path", $context)) ? ((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 340, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 340, $this->source); })()), (isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new RuntimeError('Variable "route_parameters" does not exist.', 340, $this->source); })())))), "html", null, true);
        echo "\">";
        // line 341
        if (array_key_exists("icon", $context)) {
            $this->displayBlock("icon_block", $context, $blocks);
        }
        // line 342
        if (array_key_exists("text", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 342, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 342, $this->source); })())), "html", null, true);
        }
        // line 343
        echo "</a>
    ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 339
        echo twig_spaceless($___internal_parse_6_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 347
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button_widget", $this->getTemplateName(), 347));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 348
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 348, $this->source); })()) === "input")) {
            // line 349
            $this->displayBlock("button_widget_input", $context, $blocks);
        } else {
            // line 351
            $this->displayBlock("button_widget_button", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 355
    public function block_button_widget_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button_widget_input", $this->getTemplateName(), 355));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget_input"));

        // line 356
        ob_start();
        // line 357
        echo "        <input";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
            type=\"";
        // line 358
        ((twig_in_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 358, $this->source); })()), [0 => "submit", 1 => "reset"])) ? (print (twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 358, $this->source); })()), "html", null, true))) : (print ("button")));
        echo "\"";
        // line 359
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 359, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 360
        if ((array_key_exists("value", $context) || array_key_exists("text", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 360, $this->source); })())) : ($this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 360, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 360, $this->source); })())))), "html", null, true);
            echo "\"";
        }
        echo "/>
    ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 356
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 364
    public function block_button_widget_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("button_widget_button", $this->getTemplateName(), 364));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget_button"));

        // line 365
        ob_start();
        // line 366
        echo "        <button";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "
                type=\"";
        // line 367
        ((twig_in_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 367, $this->source); })()), [0 => "submit", 1 => "reset"])) ? (print (twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 367, $this->source); })()), "html", null, true))) : (print ("button")));
        echo "\"";
        // line 368
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 368, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 369
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 369, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 370
        if (array_key_exists("icon", $context)) {
            $this->displayBlock("icon_block", $context, $blocks);
        }
        // line 371
        if (array_key_exists("text", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Oro\Bundle\LayoutBundle\Twig\LayoutExtension']->processText((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 371, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 371, $this->source); })())), "html", null, true);
        }
        // line 372
        echo "</button>
    ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 365
        echo twig_spaceless($___internal_parse_8_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 376
    public function block_external_resource_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("external_resource_widget", $this->getTemplateName(), 376));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "external_resource_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "external_resource_widget"));

        // line 377
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 377, $this->source); })()), ["rel" =>         // line 378
(isset($context["rel"]) || array_key_exists("rel", $context) ? $context["rel"] : (function () { throw new RuntimeError('Variable "rel" does not exist.', 378, $this->source); })()), "href" =>         // line 379
(isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 379, $this->source); })())]);
        // line 381
        echo "
    ";
        // line 382
        if (array_key_exists("type", $context)) {
            // line 383
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 383, $this->source); })()), ["type" =>             // line 384
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 384, $this->source); })())]);
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 388
        if (array_key_exists("hreflang", $context)) {
            // line 389
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 389, $this->source); })()), ["hreflang" =>             // line 390
(isset($context["hreflang"]) || array_key_exists("hreflang", $context) ? $context["hreflang"] : (function () { throw new RuntimeError('Variable "hreflang" does not exist.', 390, $this->source); })())]);
            // line 392
            echo "    ";
        }
        // line 393
        echo "
    <link";
        // line 394
        $this->displayBlock("block_attributes", $context, $blocks);
        echo "/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 397
    public function block_list_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list_widget", $this->getTemplateName(), 397));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_widget"));

        // line 398
        ob_start();
        // line 399
        echo "        <ul";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 400, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 401
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 401), "visible", [], "any", false, false, false, 401)) {
                // line 402
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 402), "own_template", [], "any", true, true, false, 402) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 402), "own_template", [], "any", false, false, false, 402))) {
                    // line 403
                    echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                } else {
                    // line 405
                    echo "                    <li>";
                    echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                    echo "</li>";
                }
                // line 407
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "        </ul>
    ";
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 398
        echo twig_spaceless($___internal_parse_9_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 413
    public function block_ordered_list_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("ordered_list_widget", $this->getTemplateName(), 413));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ordered_list_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ordered_list_widget"));

        // line 414
        if (array_key_exists("type", $context)) {
            // line 415
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 415, $this->source); })()), ["type" =>             // line 416
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 416, $this->source); })())]);
            // line 418
            echo "    ";
        }
        // line 419
        echo "
    ";
        // line 420
        if (array_key_exists("start", $context)) {
            // line 421
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 421, $this->source); })()), ["start" =>             // line 422
(isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 422, $this->source); })())]);
            // line 424
            echo "    ";
        }
        // line 425
        echo "
    ";
        // line 426
        ob_start();
        // line 427
        echo "        <ol";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">
        ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 428, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 429
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 429), "visible", [], "any", false, false, false, 429)) {
                // line 430
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 430), "own_template", [], "any", true, true, false, 430) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 430), "own_template", [], "any", false, false, false, 430))) {
                    // line 431
                    echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                } else {
                    // line 433
                    echo "                    <li>";
                    echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock($context["child"], 'widget');
                    echo "</li>";
                }
                // line 435
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "        </ol>
    ";
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 426
        echo twig_spaceless($___internal_parse_10_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 441
    public function block_list_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list_item_widget", $this->getTemplateName(), 441));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_item_widget"));

        // line 442
        echo "<li";
        $this->displayBlock("block_attributes", $context, $blocks);
        echo ">";
        echo $this->env->getRuntime("Oro\Bundle\LayoutBundle\Twig\TwigRenderer")->searchAndRenderBlock((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new RuntimeError('Variable "block" does not exist.', 442, $this->source); })()), 'widget');
        echo "</li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroLayout/Layout/div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1845 => 442,  1832 => 441,  1819 => 426,  1815 => 437,  1808 => 435,  1803 => 433,  1800 => 431,  1797 => 430,  1795 => 429,  1791 => 428,  1786 => 427,  1784 => 426,  1781 => 425,  1778 => 424,  1776 => 422,  1774 => 421,  1772 => 420,  1769 => 419,  1766 => 418,  1764 => 416,  1762 => 415,  1760 => 414,  1747 => 413,  1734 => 398,  1730 => 409,  1723 => 407,  1718 => 405,  1715 => 403,  1712 => 402,  1710 => 401,  1706 => 400,  1701 => 399,  1699 => 398,  1686 => 397,  1671 => 394,  1668 => 393,  1665 => 392,  1663 => 390,  1661 => 389,  1659 => 388,  1656 => 387,  1653 => 386,  1651 => 384,  1649 => 383,  1647 => 382,  1644 => 381,  1642 => 379,  1641 => 378,  1639 => 377,  1626 => 376,  1613 => 365,  1609 => 372,  1605 => 371,  1601 => 370,  1594 => 369,  1588 => 368,  1585 => 367,  1580 => 366,  1578 => 365,  1565 => 364,  1552 => 356,  1543 => 360,  1537 => 359,  1534 => 358,  1529 => 357,  1527 => 356,  1514 => 355,  1500 => 351,  1497 => 349,  1495 => 348,  1482 => 347,  1469 => 339,  1465 => 343,  1461 => 342,  1457 => 341,  1451 => 340,  1449 => 339,  1436 => 338,  1422 => 334,  1419 => 332,  1417 => 331,  1404 => 330,  1388 => 326,  1384 => 325,  1379 => 324,  1366 => 323,  1349 => 318,  1344 => 317,  1341 => 316,  1328 => 315,  1312 => 312,  1299 => 311,  1283 => 308,  1270 => 307,  1253 => 303,  1251 => 302,  1246 => 301,  1233 => 300,  1217 => 296,  1215 => 295,  1213 => 294,  1210 => 293,  1207 => 292,  1204 => 291,  1202 => 290,  1199 => 289,  1196 => 288,  1194 => 287,  1191 => 285,  1188 => 284,  1186 => 283,  1183 => 282,  1180 => 281,  1177 => 280,  1175 => 279,  1172 => 278,  1170 => 277,  1163 => 272,  1162 => 271,  1160 => 270,  1156 => 269,  1153 => 268,  1151 => 266,  1149 => 265,  1146 => 264,  1143 => 263,  1130 => 262,  1114 => 258,  1109 => 257,  1096 => 256,  1083 => 244,  1077 => 250,  1072 => 249,  1066 => 247,  1064 => 246,  1062 => 245,  1060 => 244,  1057 => 243,  1054 => 242,  1052 => 240,  1050 => 239,  1048 => 238,  1045 => 237,  1042 => 236,  1039 => 233,  1037 => 232,  1034 => 231,  1031 => 230,  1028 => 227,  1026 => 226,  1023 => 225,  1020 => 224,  1018 => 222,  1016 => 221,  1014 => 220,  1011 => 219,  1008 => 218,  1006 => 216,  1004 => 215,  1001 => 214,  988 => 213,  975 => 202,  969 => 207,  964 => 206,  958 => 204,  956 => 203,  954 => 202,  951 => 201,  948 => 200,  946 => 198,  944 => 197,  942 => 196,  939 => 195,  936 => 194,  933 => 191,  931 => 190,  928 => 189,  925 => 188,  922 => 185,  920 => 184,  917 => 183,  914 => 182,  912 => 180,  910 => 179,  908 => 178,  905 => 177,  903 => 175,  901 => 174,  888 => 173,  875 => 168,  869 => 169,  867 => 168,  864 => 167,  861 => 166,  859 => 164,  857 => 163,  855 => 162,  852 => 161,  849 => 160,  847 => 158,  845 => 157,  843 => 156,  840 => 155,  837 => 154,  835 => 152,  833 => 151,  831 => 150,  828 => 149,  825 => 148,  823 => 146,  821 => 145,  818 => 144,  805 => 143,  792 => 135,  789 => 140,  783 => 138,  780 => 137,  777 => 136,  775 => 135,  762 => 134,  749 => 129,  743 => 130,  741 => 129,  728 => 128,  712 => 124,  707 => 123,  694 => 122,  678 => 118,  672 => 116,  659 => 115,  638 => 110,  636 => 109,  632 => 108,  619 => 107,  605 => 104,  602 => 103,  599 => 102,  596 => 99,  594 => 98,  591 => 97,  588 => 96,  586 => 94,  584 => 93,  582 => 92,  579 => 91,  576 => 90,  574 => 88,  572 => 87,  570 => 86,  567 => 85,  564 => 84,  562 => 82,  560 => 81,  558 => 80,  555 => 79,  553 => 77,  552 => 76,  539 => 75,  520 => 72,  507 => 71,  486 => 66,  479 => 64,  477 => 63,  473 => 62,  470 => 59,  469 => 58,  467 => 57,  454 => 56,  433 => 51,  426 => 49,  424 => 48,  418 => 47,  416 => 46,  413 => 44,  411 => 43,  407 => 42,  404 => 41,  402 => 40,  399 => 37,  398 => 36,  396 => 35,  393 => 32,  392 => 31,  390 => 30,  377 => 29,  364 => 26,  361 => 24,  359 => 23,  357 => 22,  344 => 21,  331 => 18,  329 => 17,  316 => 16,  295 => 12,  292 => 10,  290 => 9,  287 => 7,  285 => 6,  283 => 5,  270 => 4,  246 => 1,  233 => 441,  230 => 440,  228 => 413,  225 => 412,  223 => 397,  220 => 396,  218 => 376,  215 => 375,  213 => 364,  210 => 363,  208 => 355,  205 => 354,  203 => 347,  200 => 346,  198 => 338,  195 => 337,  193 => 330,  190 => 329,  188 => 323,  185 => 322,  183 => 315,  180 => 314,  178 => 311,  175 => 310,  173 => 307,  170 => 306,  168 => 300,  165 => 299,  163 => 262,  160 => 261,  158 => 256,  155 => 255,  153 => 213,  150 => 212,  148 => 173,  145 => 172,  143 => 143,  140 => 142,  138 => 134,  135 => 133,  133 => 128,  130 => 127,  128 => 122,  125 => 121,  123 => 115,  120 => 114,  118 => 107,  115 => 106,  113 => 75,  110 => 74,  108 => 71,  105 => 70,  103 => 56,  100 => 55,  98 => 29,  95 => 28,  93 => 21,  90 => 20,  88 => 16,  85 => 15,  83 => 4,  80 => 3,  78 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block block_widget -%}
{%- endblock %}

{% block block_label -%}
    {% if label is defined and label is not same as(false) %}
        {%- if label is empty -%}
            {% set label = id|humanize %}
        {%- endif -%}
        {%- if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        <label{{ block('block_label_attributes') }}>{{ label|block_text(translation_domain) }}{% if required %}<em aria-hidden=\"true\">*</em>{% endif %}</label>
    {%- endif %}
{%- endblock %}

{% block block_row -%}
    {{ block_label(block) -}}
    {{ block_widget(block) -}}
{%- endblock %}

{% block block_attributes -%}
    {% set renderer = 'block_attributes_base' %}
    {%- if attr_renderer is defined -%}
        {% set renderer = attr_renderer %}
    {%- endif -%}
    {{- block(renderer) -}}
{%- endblock %}

{% block block_attributes_base -%}
    {%- if attr.class is defined -%}
        {% set attr = attr|merge({
        class: attr.class|replace({'{{ class_prefix }}': class_prefix})
        }) %}
    {%- endif -%}
    {%- if hidden -%}
        {% set attr = attr|merge({
            class: attr.class|default('') ~ ' hidden'
        }) %}
    {%- endif -%}
    {% set attributesThatContainsUri = ['src', 'href', 'action', 'cite', 'data', 'poster'] %}
    {% set attributesThatNeedToTranslate = ['title', 'aria-label'] %}
    {%- for attrname, attrvalue in attr -%}
        {%- if (attrvalue is iterable) -%}
            {% set attrvalue = attrvalue|json_encode() %}
        {%- endif -%}
        {%- if attrname in attributesThatNeedToTranslate -%}
            {{- ' ' ~ attrname }}=\"{{ attrvalue|block_text(translation_domain)|e('html_attr') }}\"
        {% elseif attrname in attributesThatContainsUri %}
            {{- ' ' ~ attrname }}=\"{{ attrvalue|e('html')|replace({'&amp;': '&'})|raw }}\"
        {% else %}
            {{- ' ' ~ attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock %}

{% block block_label_attributes -%}
    {%- if label_attr.class is defined -%}
        {% set label_attr = label_attr|merge({
            class: label_attr.class|replace({'{{ class_prefix }}': class_prefix})
        }) %}
    {%- endif -%}
    {%- for attrname, attrvalue in label_attr -%}
        {%- if attrname is same as('title') -%}
            {{- ' ' ~ attrname }}=\"{{ attrvalue|block_text(translation_domain) }}\"
        {% else %}
            {{- ' ' ~ attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock %}

{% block icon_block -%}
    <i class=\"fa-{{ icon }}{% if icon_class is defined %} {{ icon_class }}{% endif %}\"></i>
{%- endblock %}

{% block input_widget -%}
    {% set attr = attr|merge({
        type: type,
    }) %}

    {% if name is defined %}
        {% set attr = attr|merge({
            name: name
        }) %}
    {% endif %}

    {% if placeholder is defined %}
        {% set attr = attr|merge({
            placeholder: placeholder|block_text(translation_domain)
        }) %}
    {% endif %}

    {% if value is defined %}
        {% set attr = attr|merge({
            value: value
        }) %}
    {% endif %}

    {% if type == 'password' and attr.autocomplete is not defined %}
        {% set attr = attr|merge({
            autocomplete: 'off'
        }) %}
    {% endif %}

    <input{{ block('block_attributes') }}/>
{%- endblock %}

{% block container_widget -%}
    {% for child in block -%}
        {% if child.vars.visible %}
            {{ block_widget(child) }}
        {% endif %}
    {%- endfor %}
{%- endblock %}

{% block root_widget %}
<!DOCTYPE {{ doctype|default('html') }}>
<html>
    {{ block_widget(block) }}
</html>
{% endblock %}

{% block head_widget %}
    <head{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </head>
{% endblock %}

{% block title_widget -%}
    {% apply spaceless %}
        <title>{{ value|block_text(translation_domain) }}</title>
    {% endapply %}
{%- endblock %}

{% block page_title_widget -%}
    {% apply spaceless %}
        {% set value = value|block_text(translation_domain) %}
        {% if value|length %}
            {{ value }}
        {% endif %}
    {% endapply %}
{%- endblock %}

{% block meta_widget %}
    {% if charset is defined %}
        {% set attr = attr|merge({
            charset: charset
        }) %}
    {% endif %}

    {% if content is defined %}
        {% set attr = attr|merge({
            content: content
        }) %}
    {% endif %}

    {% if http_equiv is defined %}
        {% set attr = attr|merge({
            http_equiv: http_equiv
        }) %}
    {% endif %}

    {% if name is defined %}
        {% set attr = attr|merge({
            name: name
        }) %}
    {% endif %}

    {% apply spaceless %}
        <meta{{ block('block_attributes') }}/>
    {% endapply %}
{% endblock %}

{% block script_widget %}
    {% set attr = attr|merge({
        type: type,
    }) %}

    {% if src is defined %}
        {% set attr = attr|merge({
            src: src
        }) %}
    {% endif %}

    {% if async != false %}
        {% set attr = attr|merge({
            async: 'async'
        }) %}
    {% endif %}

    {% if defer != false %}
        {% set attr = attr|merge({
            defer: 'defer'
        }) %}
    {% endif %}

    {% if crossorigin is defined %}
        {% set attr = attr|merge({
            crossorigin: crossorigin
        }) %}
    {% endif %}

    {% apply spaceless %}
        {%- if attr.src is defined and attr.src is not empty -%}
            <script{{ block('block_attributes') }}></script>
        {% else %}
            <script{{ block('block_attributes') }}>
                {{ content|raw }}
            </script>
        {%- endif -%}
    {% endapply %}
{% endblock %}

{% block style_widget %}
    {% if type is defined %}
        {% set attr = attr|merge({
            type: type,
        }) %}
    {% endif %}

    {% if media is defined %}
        {% set attr = attr|merge({
            media: media
        }) %}
    {% endif %}

    {% if disabled is defined %}
        {% set attr = attr|merge({
            disabled: 'disabled'
        }) %}
    {% endif %}

    {% if scoped != false %}
        {% set attr = attr|merge({
            scoped: 'scoped'
        }) %}
    {% endif %}

    {% if crossorigin is defined %}
        {% set attr = attr|merge({
            crossorigin: crossorigin
        }) %}
    {% endif %}

    {% apply spaceless %}
        {%- if src is defined and src is not empty -%}
            {% import '@OroAsset/Asset.html.twig' as Asset %}
            {{ Asset.css(src, block('block_attributes')) }}
        {% else %}
            <style{{ block('block_attributes') }}>
                {{ content|raw }}
            </style>
        {%- endif -%}
    {% endapply %}
{% endblock %}

{% block body_widget %}
    <body{{ block('block_attributes') }}>
        {{ block_widget(block) }}
    </body>
{% endblock %}

{% block form_start_widget %}
    {% set attr = form.vars.attr|merge(attr) %}
    {% if attr.id is not defined %}
        {% set attr = attr|merge({
            id: form.vars.id
        }) %}
    {% endif %}
    {%- for attrname, attrvalue in attr -%}
        {%- if attrvalue is iterable -%}
            {% set attr = attr|merge({
                (attrname): attrvalue|json_encode
            }) %}
        {%- endif -%}
    {%- endfor -%}

    {% set options = {attr: attr} %}
    {% set action = form_action is defined ? form_action : (form_route_name is defined ? path(form_route_name, form_route_parameters) : null) -%}
    {% if action is not same as(null) %}
        {% set options =  options|merge({action: action}) %}
    {% endif %}

    {% if form_method is defined %}
        {% if method not in ['GET', 'POST'] -%}
            {% set form_method = 'POST' %}
        {%- endif -%}
        {% set options =  options|merge({method: form_method}) %}
    {% endif %}

    {% if form_multipart is defined %}
        {% set options =  options|merge({multipart: form_multipart}) %}
    {% endif %}

    {{ form_start(form, options) }}
    {%- if form_method is defined -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{% endblock %}

{% block form_fields_widget %}
    {{ form_widget(form) }}
    {% if render_rest %}
        {{ form_rest(form) }}
    {% endif %}
{% endblock %}

{% block form_end_widget %}
    {{ form_end(form,  {'render_rest': render_rest}) }}
{% endblock %}

{% block form_field_widget %}
    {{ form_row(form) }}
{% endblock %}

{% block form_errors_widget %}
    {% if form.vars.errors|length > 0 %}
        <div{{ block('block_attributes') }}>
            {{ form_errors(form) }}
        </div>
    {% endif %}
{% endblock %}

{% block fieldset_widget %}
    <fieldset{{ block('block_attributes') }}>
        <legend>{{ title|block_text(translation_domain) }}</legend>
        {{ block_widget(block) }}
    </fieldset>
{% endblock %}

{% block text_widget -%}
    {% if escape %}
        {{- text|block_text(translation_domain) -}}
    {% else %}
        {{- text|block_text(translation_domain)|raw -}}
    {% endif %}
{%- endblock %}

{% block link_widget -%}
    {% apply spaceless %}
        <a{{ block('block_attributes') }} href=\"{{ path is defined ? path : path(route_name, route_parameters) }}\">
            {%- if icon is defined %}{{ block('icon_block') }}{% endif %}
            {%- if text is defined %}{{ text|block_text(translation_domain) }}{% endif -%}
        </a>
    {% endapply %}
{%- endblock %}

{% block button_widget -%}
    {% if type is same as('input') %}
        {{- block('button_widget_input') -}}
    {% else %}
        {{- block('button_widget_button') -}}
    {% endif %}
{%- endblock %}

{% block button_widget_input -%}
    {% apply spaceless %}
        <input{{ block('block_attributes') }}
            type=\"{{ action in ['submit', 'reset'] ? action : 'button' }}\"
            {%- if name is defined %} name=\"{{ name }}\"{% endif %}
            {%- if value is defined or text is defined %} value=\"{{ value is defined ? value : text|block_text(translation_domain) }}\"{% endif %}/>
    {% endapply %}
{%- endblock %}

{% block button_widget_button -%}
    {% apply spaceless %}
        <button{{ block('block_attributes') }}
                type=\"{{ action in ['submit', 'reset'] ? action : 'button' }}\"
            {%- if name is defined %} name=\"{{ name }}\"{% endif %}
            {%- if value is defined %} value=\"{{ value }}\"{% endif %}>
            {%- if icon is defined %}{{ block('icon_block') }}{% endif %}
            {%- if text is defined %}{{ text|block_text(translation_domain) }}{% endif -%}
        </button>
    {% endapply %}
{%- endblock %}

{% block external_resource_widget %}
    {% set attr = attr|merge({
        rel: rel,
        href: href,
    }) %}

    {% if type is defined %}
        {% set attr = attr|merge({
            type: type
        }) %}
    {% endif %}

    {% if hreflang is defined %}
        {% set attr = attr|merge({
        hreflang: hreflang
        }) %}
    {% endif %}

    <link{{ block('block_attributes') }}/>
{% endblock %}

{% block list_widget -%}
    {% apply spaceless %}
        <ul{{ block('block_attributes') }}>
        {% for child in block -%}
            {% if child.vars.visible %}
                {% if child.vars.own_template is defined and child.vars.own_template -%}
                    {{ block_widget(child) }}
                {%- else %}
                    <li>{{ block_widget(child) }}</li>
                {%- endif %}
            {% endif %}
        {%- endfor %}
        </ul>
    {% endapply %}
{%- endblock %}

{% block ordered_list_widget -%}
    {% if type is defined %}
        {% set attr = attr|merge({
        type: type
        }) %}
    {% endif %}

    {% if start is defined %}
        {% set attr = attr|merge({
        start: start
        }) %}
    {% endif %}

    {% apply spaceless %}
        <ol{{ block('block_attributes') }}>
        {% for child in block -%}
            {% if child.vars.visible %}
                {% if child.vars.own_template is defined and child.vars.own_template -%}
                    {{ block_widget(child) }}
                {%- else %}
                    <li>{{ block_widget(child) }}</li>
                {%- endif %}
            {% endif %}
        {%- endfor %}
        </ol>
    {% endapply %}
{%- endblock %}

{% block list_item_widget -%}
    <li{{ block('block_attributes') }}>{{ block_widget(block) }}</li>
{%- endblock %}
", "@OroLayout/Layout/div_layout.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/LayoutBundle/Resources/views/Layout/div_layout.html.twig");
    }
}
