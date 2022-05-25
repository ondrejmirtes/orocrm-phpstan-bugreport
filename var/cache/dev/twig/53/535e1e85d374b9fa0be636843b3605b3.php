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

/* @OroNavigation/Menu/application_menu_desktop_top.html.twig */
class __TwigTemplate_441b16b5122c61f668ef6f84503ea5da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list_wrapper' => [$this, 'block_list_wrapper'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'children' => [$this, 'block_children'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@OroNavigation/Menu/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/application_menu_desktop_top.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/application_menu_desktop_top.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/application_menu_desktop_top.html.twig"));

        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/application_menu_desktop_top.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_list_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list_wrapper", $this->getTemplateName(), 3));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "level", [], "any", false, false, false, 5) == 1)) {
                // line 6
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__placeholder\" data-role=\"sub-menu\" aria-hidden=\"true\">
                <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">";
                // line 8
                $this->displayBlock("list", $context, $blocks);
                // line 9
                echo "</div>
            </div>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "level", [], "any", false, false, false, 11) == 2)) {
                // line 12
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\" data-role=\"sub-menu\" aria-hidden=\"true\">";
                // line 13
                $this->displayBlock("list", $context, $blocks);
                // line 14
                echo "</div>
        ";
            } else {
                // line 16
                $this->displayBlock("list", $context, $blocks);
            }
            // line 18
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 21
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item", $this->getTemplateName(), 21));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "hasChildren", [], "any", false, false, false, 22) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "displayChildren", [], "any", false, false, false, 22))) {
            // line 23
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 23, $this->source); })()), [0 => "dropdown", 1 => ("dropdown-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "level", [], "any", false, false, false, 23))]);
            // line 24
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 24, $this->source); })()), [0 => "dropdown-menu", 1 => ("dropdown-menu-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "level", [], "any", false, false, false, 24))]);
        } else {
            // line 26
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 26, $this->source); })()), [0 => "dropdown-menu-single-item", 1 => ("dropdown-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "level", [], "any", false, false, false, 26))]);
        }
        // line 28
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 28) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 28), "routes", [], "any", true, true, false, 28)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 28), "routes", [], "any", false, true, false, 28), 0, [], "array", true, true, false, 28))) {
            // line 29
            $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 29, $this->source); })()), ["data-route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "extras", [], "any", false, false, false, 29), "routes", [], "any", false, false, false, 29), 0, [], "array", false, false, false, 29)]);
            // line 30
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "extras", [], "any", false, false, false, 30), "routes", [], "any", false, false, false, 30)) > 1)) {
                // line 31
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 31, $this->source); })()), ["data-routes" => json_encode(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "extras", [], "any", false, false, false, 31), "routes", [], "any", false, false, false, 31), 1))]);
            }
        }
        // line 35
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "level", [], "any", false, false, false, 35) == 1)) {
            // line 36
            echo "        ";
            $context["hasValidChildren"] = false;
            // line 37
            echo "
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                // line 39
                echo "            ";
                if ( !(isset($context["hasValidChildren"]) || array_key_exists("hasValidChildren", $context) ? $context["hasValidChildren"] : (function () { throw new RuntimeError('Variable "hasValidChildren" does not exist.', 39, $this->source); })())) {
                    // line 40
                    $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, true, false, 40), "show_non_authorized", [], "any", true, true, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, false, false, 40), "show_non_authorized", [], "any", false, false, false, 40));
                    // line 41
                    $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, false, false, 41), "isAllowed", [], "any", false, false, false, 41) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 41, $this->source); })()));
                    // line 42
                    if (((twig_get_attribute($this->env, $this->source, $context["sub_item"], "displayed", [], "any", false, false, false, 42) && (isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 42, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, $context["sub_item"], "getExtra", [0 => "divider"], "method", false, false, false, 42))) {
                        // line 43
                        echo "                    ";
                        $context["hasValidChildren"] = true;
                        // line 44
                        echo "                ";
                    }
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
        ";
            // line 48
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "uri", [], "any", false, false, false, 48)) || (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "uri", [], "any", false, false, false, 48) != "#")) || ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "hasChildren", [], "any", false, false, false, 48) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 48, $this->source); })()), "displayChildren", [], "any", false, false, false, 48)) && (isset($context["hasValidChildren"]) || array_key_exists("hasValidChildren", $context) ? $context["hasValidChildren"] : (function () { throw new RuntimeError('Variable "hasValidChildren" does not exist.', 48, $this->source); })())))) {
                // line 49
                echo "            ";
                $this->displayBlock("item_renderer", $context, $blocks);
                echo "
        ";
            }
            // line 51
            echo "    ";
        } else {
            // line 52
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 56
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("linkElement", $this->getTemplateName(), 56));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 57
        echo "    ";
        $macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/application_menu_desktop_top.html.twig", 57)->unwrap();
        // line 58
        echo "
    ";
        // line 59
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 60
            echo "    ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 60, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [            // line 61
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 61, $this->source); })()), "class", [0 => "dropdown-toggle"]], 61, $context, $this->getSourceContext())]);
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "hasChildren", [], "any", false, false, false, 65) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "displayChildren", [], "any", false, false, false, 65)) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "level", [], "any", false, false, false, 65) === 0))) {
            // line 66
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 66, $this->source); })()), ["data-toggle" => "dropdown"]);
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "uri", [], "any", false, false, false, 71)) || (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 71, $this->source); })()), "uri", [], "any", false, false, false, 71) == "#"))) {
            // line 72
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 72, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [            // line 73
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 73, $this->source); })()), "class", [0 => "unclickable"]], 73, $context, $this->getSourceContext())]);
            // line 75
            echo "    ";
        }
        // line 76
        echo "
    <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "uri", [], "any", false, false, false, 77), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 77, $this->source); })())], 77, $context, $this->getSourceContext());
        echo ">
        <span class=\"title ";
        // line 78
        echo twig_escape_filter($this->env, ("title-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "level", [], "any", false, false, false, 78)), "html", null, true);
        echo "\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 82
    public function block_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("children", $this->getTemplateName(), 82));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "children"));

        // line 83
        ob_start();
        // line 84
        $this->displayParentBlock("children", $context, $blocks);
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        if (((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 86, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "level", [], "any", false, false, false, 86) === 1))) {
            // line 87
            $context["labelAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 87, $this->source); })()), "labelAttributes", [], "any", false, false, false, 87);
            // line 88
            echo "        <li class=\"dropdown-menu-title ";
            echo twig_escape_filter($this->env, ("dropdown-menu-title-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 88, $this->source); })()), "level", [], "any", false, false, false, 88)), "html", null, true);
            echo "\">";
            $this->displayBlock("spanElement", $context, $blocks);
            echo "</li>
        <li class=\"divider\"><span></span></li>
    ";
        }
        // line 91
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 91, $this->source); })());
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/application_menu_desktop_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 91,  321 => 88,  319 => 87,  317 => 86,  314 => 84,  312 => 83,  299 => 82,  281 => 78,  275 => 77,  272 => 76,  269 => 75,  267 => 73,  265 => 72,  263 => 71,  260 => 70,  257 => 69,  254 => 66,  252 => 65,  249 => 64,  246 => 63,  244 => 61,  242 => 60,  240 => 59,  237 => 58,  234 => 57,  221 => 56,  204 => 52,  201 => 51,  195 => 49,  193 => 48,  190 => 47,  184 => 46,  181 => 45,  178 => 44,  175 => 43,  173 => 42,  171 => 41,  169 => 40,  166 => 39,  162 => 38,  159 => 37,  156 => 36,  154 => 35,  150 => 31,  148 => 30,  146 => 29,  144 => 28,  141 => 26,  138 => 24,  136 => 23,  134 => 22,  121 => 21,  107 => 18,  104 => 16,  100 => 14,  98 => 13,  96 => 12,  94 => 11,  90 => 9,  88 => 8,  85 => 6,  82 => 5,  80 => 4,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}

{%- block list_wrapper -%}
    {% if item.hasChildren %}
        {% if item.level == 1 %}
            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__placeholder\" data-role=\"sub-menu\" aria-hidden=\"true\">
                <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">
                    {{- block('list') -}}
                </div>
            </div>
        {% elseif item.level == 2 %}
            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\" data-role=\"sub-menu\" aria-hidden=\"true\">
                {{- block('list') -}}
            </div>
        {% else %}
            {{- block('list') -}}
        {% endif %}
    {% endif %}
{%- endblock -%}

{%- block item -%}
    {%- if item.hasChildren and item.displayChildren -%}
        {%- set classes = classes|merge(['dropdown', 'dropdown-level-' ~ item.level]) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu', 'dropdown-menu-level-' ~ item.level]) %}
    {%- else -%}
        {%- set classes = classes|merge(['dropdown-menu-single-item', 'dropdown-level-' ~ item.level]) %}
    {%- endif -%}
    {%- if item.extras is defined and item.extras.routes is defined and item.extras.routes[0] is defined -%}
        {% set itemAttributes = itemAttributes|merge({'data-route': item.extras.routes[0]})%}
        {%- if item.extras.routes|length > 1 -%}
            {% set itemAttributes = itemAttributes|merge({'data-routes': item.extras.routes|slice(1)|json_encode })%}
        {%- endif -%}
    {%- endif -%}

    {% if item.level == 1 %}
        {% set hasValidChildren = false %}

        {% for sub_item in item %}
            {% if not hasValidChildren %}
                {%- set showNonAuthorized = sub_item.extras.show_non_authorized is defined and sub_item.extras.show_non_authorized -%}
                {%- set displayable = sub_item.extras.isAllowed or showNonAuthorized -%}
                {% if sub_item.displayed and displayable and not sub_item.getExtra('divider') %}
                    {% set hasValidChildren = true %}
                {% endif %}
            {% endif %}
        {% endfor %}

        {% if (item.uri is empty or item.uri != '#') or (item.hasChildren and item.displayChildren and hasValidChildren) %}
            {{ block('item_renderer') }}
        {% endif %}
    {% else %}
        {{ block('item_renderer') }}
    {% endif %}
{%- endblock -%}

{% block linkElement %}
    {% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

    {% if isDesktopVersion() %}
    {% set linkAttributes = linkAttributes|merge({
        'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['dropdown-toggle']),
    }) %}
    {% endif %}

    {% if item.hasChildren and item.displayChildren and item.level is same as(0) %}
        {% set linkAttributes = linkAttributes|merge({
            'data-toggle': 'dropdown'
        }) %}
    {% endif %}

    {% if item.uri is empty or item.uri=='#' %}
        {% set linkAttributes = linkAttributes|merge({
            'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['unclickable'])
        }) %}
    {% endif %}

    <a href=\"{{ item.uri }}\"{{ oro_menu.attributes(linkAttributes) }}>
        <span class=\"title {{ 'title-level-' ~ item.level }}\">{{ block('label') }}</span>
    </a>
{% endblock %}

{%- block children -%}
    {%- set content -%}
        {{- parent() -}}
    {%- endset -%}
    {% if content and item.level is same as(1) %}
        {%- set labelAttributes = item.labelAttributes %}
        <li class=\"dropdown-menu-title {{ 'dropdown-menu-title-level-' ~ item.level }}\">{{ block('spanElement') }}</li>
        <li class=\"divider\"><span></span></li>
    {% endif %}
    {{- content|raw -}}
{%- endblock -%}
", "@OroNavigation/Menu/application_menu_desktop_top.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/application_menu_desktop_top.html.twig");
    }
}
