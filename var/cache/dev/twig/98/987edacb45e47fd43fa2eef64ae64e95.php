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

/* @OroNavigation/Menu/menu.html.twig */
class __TwigTemplate_8e0632a1704e4d8ea443002329393758 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'compressed_root' => [$this, 'block_compressed_root'],
            'root' => [$this, 'block_root'],
            'list' => [$this, 'block_list'],
            'children' => [$this, 'block_children'],
            'item' => [$this, 'block_item'],
            'item_renderer' => [$this, 'block_item_renderer'],
            'item_content' => [$this, 'block_item_content'],
            'list_wrapper' => [$this, 'block_list_wrapper'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/menu.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/menu.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/Menu/menu.html.twig", 2)->unwrap();
        // line 3
        $macros["Navigation"] = $this->macros["Navigation"] = $this->loadTemplate("@OroNavigation/macros.html.twig", "@OroNavigation/Menu/menu.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu_base.html.twig", "@OroNavigation/Menu/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_compressed_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("compressed_root", $this->getTemplateName(), 19));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        $___internal_parse_84_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo twig_spaceless($___internal_parse_84_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 25
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("root", $this->getTemplateName(), 25));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "root"));

        // line 26
        echo "    ";
        $context["listAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "childrenAttributes", [], "any", false, false, false, 26);
        // line 27
        echo "
    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rootClass", [], "any", true, true, false, 28)) {
            // line 29
            echo "        ";
            $macros["oro_menu"] = $this;
            // line 30
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 30, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 30, $this->source); })()), "class", [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()), "rootClass", [], "any", false, false, false, 30)]], 30, $context, $this->getSourceContext())]);
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 35
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list", $this->getTemplateName(), 35));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list"));

        // line 36
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "hasChildren", [], "any", false, false, false, 36) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 36, $this->source); })()), "depth", [], "any", false, false, false, 36) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "displayChildren", [], "any", false, false, false, 36))) {
            // line 37
            $macros["oro_menu"] = $this;
            // line 38
            $context["childrenContent"] =             $this->renderBlock("children", $context, $blocks);
            // line 39
            if ((isset($context["childrenContent"]) || array_key_exists("childrenContent", $context) ? $context["childrenContent"] : (function () { throw new RuntimeError('Variable "childrenContent" does not exist.', 39, $this->source); })())) {
                // line 40
                echo "<ul";
                echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new RuntimeError('Variable "listAttributes" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
                echo ">
                ";
                // line 41
                echo (isset($context["childrenContent"]) || array_key_exists("childrenContent", $context) ? $context["childrenContent"] : (function () { throw new RuntimeError('Variable "childrenContent" does not exist.', 41, $this->source); })());
                echo "
            </ul>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 47
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("children", $this->getTemplateName(), 47));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 49
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 49, $this->source); })());
        // line 50
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 50, $this->source); })());
        // line 52
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 52, $this->source); })()), "depth", [], "any", false, false, false, 52))) {
            // line 53
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 53, $this->source); })()), ["depth" => (twig_get_attribute($this->env, $this->source, (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 53, $this->source); })()), "depth", [], "any", false, false, false, 53) - 1)]);
        }
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 55, $this->source); })()), "children", [], "any", false, false, false, 55));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            $context["itemAttributes"] = twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, false, 56);
            // line 57
            $context["childrenAttributes"] = twig_get_attribute($this->env, $this->source, $context["item"], "childrenAttributes", [], "any", false, false, false, 57);
            // line 58
            $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["itemAttributes"] ?? null), "class", [], "any", true, true, false, 58)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 58, $this->source); })()), "class", [], "any", false, false, false, 58), " ")) : ([]));
            // line 59
            $context["childrenClasses"] = ((twig_get_attribute($this->env, $this->source, ($context["childrenAttributes"] ?? null), "class", [], "any", true, true, false, 59)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["childrenAttributes"]) || array_key_exists("childrenAttributes", $context) ? $context["childrenAttributes"] : (function () { throw new RuntimeError('Variable "childrenAttributes" does not exist.', 59, $this->source); })()), "class", [], "any", false, false, false, 59), " ")) : ([]));
            // line 60
            ob_start();
            // line 61
            $this->displayBlock("item", $context, $blocks);
            $context["itemContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            if (((isset($context["itemContent"]) || array_key_exists("itemContent", $context) ? $context["itemContent"] : (function () { throw new RuntimeError('Variable "itemContent" does not exist.', 63, $this->source); })()) || (twig_get_attribute($this->env, $this->source, $context["item"], "uri", [], "any", false, false, false, 63) != "#"))) {
                // line 64
                echo (isset($context["itemContent"]) || array_key_exists("itemContent", $context) ? $context["itemContent"] : (function () { throw new RuntimeError('Variable "itemContent" does not exist.', 64, $this->source); })());
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new RuntimeError('Variable "currentItem" does not exist.', 68, $this->source); })());
        // line 69
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new RuntimeError('Variable "currentOptions" does not exist.', 69, $this->source); })());
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 72
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item", $this->getTemplateName(), 72));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 73
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 76
    public function block_item_renderer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item_renderer", $this->getTemplateName(), 76));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_renderer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_renderer"));

        // line 77
        $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 77), "show_non_authorized", [], "any", true, true, false, 77) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "extras", [], "any", false, false, false, 77), "show_non_authorized", [], "any", false, false, false, 77));
        // line 78
        $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "extras", [], "any", false, false, false, 78), "isAllowed", [], "any", false, false, false, 78) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 78, $this->source); })()));
        // line 79
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 79, $this->source); })()), "displayed", [], "any", false, false, false, 79) && (isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 79, $this->source); })()))) {
            // line 81
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 81, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 81, $this->source); })())], "method", false, false, false, 81)) {
                // line 82
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 82, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 82, $this->source); })()), "currentClass", [], "any", false, false, false, 82)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 83, $this->source); })()), "isAncestor", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 83, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 83, $this->source); })()), "depth", [], "any", false, false, false, 83)], "method", false, false, false, 83)) {
                // line 84
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 84, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 84, $this->source); })()), "ancestorClass", [], "any", false, false, false, 84)]);
            }
            // line 86
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "actsLikeFirst", [], "any", false, false, false, 86)) {
                // line 87
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 87, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 87, $this->source); })()), "firstClass", [], "any", false, false, false, 87)]);
            }
            // line 89
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 89, $this->source); })()), "actsLikeLast", [], "any", false, false, false, 89)) {
                // line 90
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 90, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 90, $this->source); })()), "lastClass", [], "any", false, false, false, 90)]);
            }
            // line 92
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 92, $this->source); })()))) {
                // line 93
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 93, $this->source); })()), ["class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 93, $this->source); })()), " ")]);
            }
            // line 95
            echo "        ";
            // line 96
            echo "        ";
            $macros["oro_menu"] = $this;
            // line 97
            echo "        <li";
            echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 97, $this->source); })())], 97, $context, $this->getSourceContext());
            echo ">
            ";
            // line 98
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 103
    public function block_item_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item_content", $this->getTemplateName(), 103));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_content"));

        // line 104
        $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 104, $this->source); })()), "linkAttributes", [], "any", false, false, false, 104);
        // line 105
        $context["labelAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 105, $this->source); })()), "labelAttributes", [], "any", false, false, false, 105);
        // line 106
        ob_start();
        // line 107
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })()), "uri", [], "any", false, false, false, 107)) && ( !twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new RuntimeError('Variable "matcher" does not exist.', 107, $this->source); })()), "isCurrent", [0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 107, $this->source); })())], "method", false, false, false, 107) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 107, $this->source); })()), "currentAsLink", [], "any", false, false, false, 107)))) {
            // line 108
            echo "            ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 110
            echo "            ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        $context["elementContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 114, $this->source); })()), [0 => "menu", 1 => ("menu-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 114, $this->source); })()), "level", [], "any", false, false, false, 114))]);
        // line 115
        $context["listAttributes"] = twig_array_merge((isset($context["childrenAttributes"]) || array_key_exists("childrenAttributes", $context) ? $context["childrenAttributes"] : (function () { throw new RuntimeError('Variable "childrenAttributes" does not exist.', 115, $this->source); })()), ["class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 115, $this->source); })()), " ")]);
        // line 116
        $context["wrapperContent"] =         $this->renderBlock("list_wrapper", $context, $blocks);
        // line 117
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 117, $this->source); })()), "uri", [], "any", false, false, false, 117) != "#") || (isset($context["wrapperContent"]) || array_key_exists("wrapperContent", $context) ? $context["wrapperContent"] : (function () { throw new RuntimeError('Variable "wrapperContent" does not exist.', 117, $this->source); })()))) {
            // line 118
            echo (isset($context["elementContent"]) || array_key_exists("elementContent", $context) ? $context["elementContent"] : (function () { throw new RuntimeError('Variable "elementContent" does not exist.', 118, $this->source); })());
            // line 119
            echo (isset($context["wrapperContent"]) || array_key_exists("wrapperContent", $context) ? $context["wrapperContent"] : (function () { throw new RuntimeError('Variable "wrapperContent" does not exist.', 119, $this->source); })());
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 124
    public function block_list_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list_wrapper", $this->getTemplateName(), 124));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 125
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 128
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("linkElement", $this->getTemplateName(), 128));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 129
        echo "    ";
        $macros["oro_menu"] = $this;
        // line 130
        echo "    ";
        $context["extras"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "extras", [], "any", false, false, false, 130);
        // line 131
        echo "
    ";
        // line 132
        if ((twig_get_attribute($this->env, $this->source, ($context["extras"] ?? null), "dialog", [], "any", true, true, false, 132) && twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 132, $this->source); })()), "dialog", [], "any", false, false, false, 132))) {
            // line 133
            echo "        ";
            echo twig_call_macro($macros["Navigation"], "macro_renderClientLink", [twig_get_attribute($this->env, $this->source, (isset($context["extras"]) || array_key_exists("extras", $context) ? $context["extras"] : (function () { throw new RuntimeError('Variable "extras" does not exist.', 133, $this->source); })()), "dialog_config", [], "any", false, false, false, 133), ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(twig_get_attribute($this->env, $this->source,             // line 134
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), true), "entityId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135)]], 133, $context, $this->getSourceContext());
        } else {
            // line 138
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 138, $this->source); })()), "uri", [], "any", false, false, false, 138), "html", null, true);
            echo "\"";
            echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 138, $this->source); })())], 138, $context, $this->getSourceContext());
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 140
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 143
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("spanElement", $this->getTemplateName(), 143));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spanElement"));

        // line 144
        echo "    ";
        $macros["oro_menu"] = $this;
        // line 145
        echo "    <span";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 145, $this->source); })())], 145, $context, $this->getSourceContext());
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 148
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("label", $this->getTemplateName(), 148));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 149
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "getExtra", [0 => "icon"], "method", false, false, false, 149)) {
            // line 150
            echo "        <span class=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "getExtra", [0 => "icon"], "method", false, false, false, 150) . " menu-icon"), "html", null, true);
            echo "\" aria-hidden=\"true\"></span>
    ";
        }
        // line 152
        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 152, $this->source); })()), "allow_safe_labels", [], "any", false, false, false, 152) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 152, $this->source); })()), "getExtra", [0 => "safe_label", 1 => false], "method", false, false, false, 152))) {
            // line 153
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\HtmlTagExtension']->htmlSanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 153, $this->source); })()), "getLabel", [], "method", false, false, false, 153)));
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 154
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 154, $this->source); })()), "getExtra", [0 => "translate_disabled", 1 => false], "method", false, false, false, 154) == false)) {
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "getLabel", [], "method", false, false, false, 155), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "getExtra", [0 => "translateParams", 1 => []], "method", false, false, false, 155), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 155, $this->source); })()), "getExtra", [0 => "translateDomain", 1 => "messages"], "method", false, false, false, 155)), "html", null, true);
        } else {
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 157, $this->source); })()), "getLabel", [], "method", false, false, false, 157), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 5
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "attributes"));

            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 7
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 8
                    echo twig_sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_add_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "add_attribute_values"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "add_attribute_values"));

            // line 14
            $context["_values"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 14, $this->source); })()), [], "array", true, true, false, 14)) ? (twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 14, $this->source); })()), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 14, $this->source); })()), [], "array", false, false, false, 14), " ")) : ([]));
            // line 15
            $context["_values"] = twig_array_merge((isset($context["_values"]) || array_key_exists("_values", $context) ? $context["_values"] : (function () { throw new RuntimeError('Variable "_values" does not exist.', 15, $this->source); })()), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 15, $this->source); })()));
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["_values"]) || array_key_exists("_values", $context) ? $context["_values"] : (function () { throw new RuntimeError('Variable "_values" does not exist.', 16, $this->source); })()), " "), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 16,  667 => 15,  665 => 14,  644 => 13,  624 => 8,  622 => 7,  617 => 6,  598 => 5,  584 => 157,  581 => 155,  579 => 154,  577 => 153,  575 => 152,  569 => 150,  567 => 149,  554 => 148,  536 => 145,  533 => 144,  520 => 143,  506 => 140,  496 => 138,  493 => 135,  492 => 134,  490 => 133,  488 => 132,  485 => 131,  482 => 130,  479 => 129,  466 => 128,  450 => 125,  437 => 124,  423 => 119,  421 => 118,  419 => 117,  417 => 116,  415 => 115,  413 => 114,  408 => 110,  404 => 108,  402 => 107,  400 => 106,  398 => 105,  396 => 104,  383 => 103,  367 => 98,  362 => 97,  359 => 96,  357 => 95,  354 => 93,  352 => 92,  349 => 90,  347 => 89,  344 => 87,  342 => 86,  339 => 84,  337 => 83,  335 => 82,  333 => 81,  331 => 79,  329 => 78,  327 => 77,  314 => 76,  298 => 73,  285 => 72,  272 => 69,  270 => 68,  255 => 64,  253 => 63,  250 => 61,  248 => 60,  246 => 59,  244 => 58,  242 => 57,  240 => 56,  223 => 55,  220 => 53,  218 => 52,  216 => 50,  214 => 49,  201 => 47,  184 => 41,  179 => 40,  177 => 39,  175 => 38,  173 => 37,  171 => 36,  158 => 35,  144 => 32,  141 => 31,  138 => 30,  135 => 29,  133 => 28,  130 => 27,  127 => 26,  114 => 25,  101 => 20,  95 => 21,  92 => 20,  79 => 19,  65 => 1,  63 => 3,  61 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu_base.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroNavigation/macros.html.twig' as Navigation %}

{% macro attributes(attributes) %}
    {% for name, value in attributes %}
        {%- if value is not none and value is not same as(false) -%}
            {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
        {%- endif -%}
    {%- endfor -%}
{% endmacro %}

{% macro add_attribute_values(attributes, attribute, values) %}
    {%- set _values = attributes[attribute] is defined ? attributes[attribute]|split(' ') : [] %}
    {%- set _values = _values|merge(values) %}
    {{- _values|join(' ') -}}
{% endmacro %}

{% block compressed_root %}
    {% apply spaceless %}
        {{ block('root') }}
    {% endapply %}
{% endblock %}

{% block root %}
    {% set listAttributes = item.childrenAttributes %}

    {% if options.rootClass is defined %}
        {% import _self as oro_menu %}
        {% set listAttributes = listAttributes|merge({'class': oro_menu.add_attribute_values(listAttributes, 'class', [options.rootClass])}) %}
    {% endif %}
    {{ block('list') -}}
{% endblock %}

{%- block list -%}
    {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren -%}
        {%- import _self as oro_menu -%}
        {%- set childrenContent = block('children') -%}
        {%- if childrenContent -%}
            <ul{{ oro_menu.attributes(listAttributes) }}>
                {{ childrenContent|raw }}
            </ul>
        {%- endif -%}
    {%- endif -%}
{%- endblock -%}

{%- block children -%}
    {# save current variables #}
    {%- set currentOptions = options -%}
    {%- set currentItem = item -%}
    {# update the depth for children #}
    {%- if options.depth is not none -%}
        {%- set options = currentOptions|merge({'depth': currentOptions.depth - 1}) -%}
    {%- endif -%}
    {%- for item in currentItem.children -%}
        {%- set itemAttributes = item.attributes %}
        {%- set childrenAttributes = item.childrenAttributes %}
        {%- set classes = itemAttributes.class is defined ? itemAttributes.class|split(' ') : [] %}
        {%- set childrenClasses = childrenAttributes.class is defined ? childrenAttributes.class|split(' ') : [] %}
        {%- set itemContent -%}
            {{- block('item') -}}
        {%- endset -%}
        {% if itemContent or item.uri != '#' %}
            {{- itemContent|raw -}}
        {% endif %}
    {%- endfor -%}
    {# restore current variables #}
    {%- set item = currentItem -%}
    {%- set options = currentOptions -%}
{%- endblock -%}

{% block item %}
    {{ block('item_renderer') }}
{% endblock %}

{%- block item_renderer -%}
    {%- set showNonAuthorized = item.extras.show_non_authorized is defined and item.extras.show_non_authorized -%}
    {%- set displayable = item.extras.isAllowed or showNonAuthorized -%}
    {%- if item.displayed and displayable -%}
        {# building the class of the item #}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- if classes is not empty %}
            {%- set itemAttributes = itemAttributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {% import _self as oro_menu %}
        <li{{ oro_menu.attributes(itemAttributes) }}>
            {{ block('item_content') }}
        </li>
    {%- endif -%}
{%- endblock -%}

{% block item_content %}
    {%- set linkAttributes = item.linkAttributes %}
    {%- set labelAttributes = item.labelAttributes %}
    {%- set elementContent -%}
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
    {%- endset -%}
    {# render the list of children#}
    {%- set childrenClasses = childrenClasses|merge(['menu', 'menu-level-' ~ item.level]) %}
    {%- set listAttributes = childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
    {%- set wrapperContent = block('list_wrapper') -%}
    {% if item.uri != '#' or wrapperContent %}
        {{- elementContent|raw -}}
        {{- wrapperContent|raw -}}
    {% endif %}
{% endblock %}

{# list wrapper block is used to allow modification of execution context in child templates #}
{% block list_wrapper %}
    {{ block('list') }}
{% endblock %}

{% block linkElement %}
    {% import _self as oro_menu %}
    {% set extras = item.extras %}

    {% if extras.dialog is defined and extras.dialog %}
        {{ Navigation.renderClientLink(extras.dialog_config, {
            entityClass: oro_class_name(app.user, true),
            entityId: app.user.id
        }) }}
    {%- else %}
        <a href=\"{{ item.uri }}\"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>
    {% endif %}

{% endblock %}

{% block spanElement %}
    {% import _self as oro_menu %}
    <span{{ oro_menu.attributes(labelAttributes) }}>{{ block('label') }}</span>
{% endblock %}

{% block label %}
    {%- if item.getExtra('icon') %}
        <span class=\"{{- item.getExtra('icon') ~ ' menu-icon' -}}\" aria-hidden=\"true\"></span>
    {% endif -%}
    {% if options.allow_safe_labels and item.getExtra('safe_label', false) %}
        {{- item.getLabel()|trans|oro_html_sanitize -}}
    {% elseif item.getExtra('translate_disabled', false) == false %}
        {{- item.getLabel()|trans(item.getExtra('translateParams', {}), item.getExtra('translateDomain', 'messages')) -}}
    {% else %}
        {{- item.getLabel() -}}
    {% endif %}
{% endblock %}
", "@OroNavigation/Menu/menu.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/menu.html.twig");
    }
}
