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

/* @OroNavigation/Menu/application_menu_desktop_sided.html.twig */
class __TwigTemplate_9bb2eef248b28f0492445f6b80a32464 extends Template
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
            'item_content' => [$this, 'block_item_content'],
            'label' => [$this, 'block_label'],
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNavigation/Menu/application_menu_desktop_sided.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig"));

        // line 2
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig", 2)->unwrap();
        // line 3
        $macros["Navigation"] = $this->macros["Navigation"] = $this->loadTemplate("@OroNavigation/macros.html.twig", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_list_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("list_wrapper", $this->getTemplateName(), 5));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 6
        echo "    ";
        // line 7
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 7, $this->source); })()), [0 => "menu", 1 => ("menu-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "level", [], "any", false, false, false, 7))]);
        // line 8
        $context["listAttributes"] = twig_array_merge((isset($context["childrenAttributes"]) || array_key_exists("childrenAttributes", $context) ? $context["childrenAttributes"] : (function () { throw new RuntimeError('Variable "childrenAttributes" does not exist.', 8, $this->source); })()), ["class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 8, $this->source); })()), " ")]);
        // line 9
        echo "
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "hasChildren", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "level", [], "any", false, false, false, 11) == 1)) {
                // line 12
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">";
                // line 13
                $this->displayBlock("list", $context, $blocks);
                // line 14
                echo "</div>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })()), "level", [], "any", false, false, false, 15) == 2)) {
                // line 16
                echo "            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\">";
                // line 17
                $this->displayBlock("list", $context, $blocks);
                // line 18
                echo "</div>
        ";
            } else {
                // line 20
                $this->displayBlock("list", $context, $blocks);
            }
            // line 22
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 25
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item", $this->getTemplateName(), 25));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        // line 26
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "hasChildren", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "displayChildren", [], "any", false, false, false, 26))) {
            // line 27
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 27, $this->source); })()), [0 => "dropdown", 1 => ("dropdown-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "level", [], "any", false, false, false, 27))]);
            // line 28
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "level", [], "any", false, false, false, 28) != 1)) {
                // line 29
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new RuntimeError('Variable "childrenClasses" does not exist.', 29, $this->source); })()), [0 => "dropdown-menu"]);
                // line 30
                echo "        ";
            }
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "level", [], "any", false, false, false, 31) == 1)) {
            // line 32
            $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 32, $this->source); })()), [0 => "dropdown", 1 => "dropdown-empty", 2 => ("dropdown-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "level", [], "any", false, false, false, 32))]);
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", true, true, false, 34) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 34), "routes", [], "any", true, true, false, 34)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", [], "any", false, true, false, 34), "routes", [], "any", false, true, false, 34), 0, [], "array", true, true, false, 34))) {
            // line 35
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "extras", [], "any", false, false, false, 35), "routes", [], "any", false, false, false, 35)) > 1)) {
                // line 36
                echo "            ";
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 36, $this->source); })()), ["data-routes" => json_encode(twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "extras", [], "any", false, false, false, 36), "routes", [], "any", false, false, false, 36), 1))]);
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) || array_key_exists("itemAttributes", $context) ? $context["itemAttributes"] : (function () { throw new RuntimeError('Variable "itemAttributes" does not exist.', 38, $this->source); })()), ["data-route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "extras", [], "any", false, false, false, 38), "routes", [], "any", false, false, false, 38), 0, [], "array", false, false, false, 38)]);
            // line 39
            echo "    ";
        }
        // line 40
        echo "
    ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "level", [], "any", false, false, false, 41) == 1)) {
            // line 42
            echo "        ";
            $context["hasValidChildren"] = false;
            // line 43
            echo "
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                // line 45
                echo "            ";
                if ( !(isset($context["hasValidChildren"]) || array_key_exists("hasValidChildren", $context) ? $context["hasValidChildren"] : (function () { throw new RuntimeError('Variable "hasValidChildren" does not exist.', 45, $this->source); })())) {
                    // line 46
                    $context["showNonAuthorized"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, true, false, 46), "show_non_authorized", [], "any", true, true, false, 46) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, false, false, 46), "show_non_authorized", [], "any", false, false, false, 46));
                    // line 47
                    $context["displayable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sub_item"], "extras", [], "any", false, false, false, 47), "isAllowed", [], "any", false, false, false, 47) || (isset($context["showNonAuthorized"]) || array_key_exists("showNonAuthorized", $context) ? $context["showNonAuthorized"] : (function () { throw new RuntimeError('Variable "showNonAuthorized" does not exist.', 47, $this->source); })()));
                    // line 48
                    if (((twig_get_attribute($this->env, $this->source, $context["sub_item"], "displayed", [], "any", false, false, false, 48) && (isset($context["displayable"]) || array_key_exists("displayable", $context) ? $context["displayable"] : (function () { throw new RuntimeError('Variable "displayable" does not exist.', 48, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, $context["sub_item"], "getExtra", [0 => "divider"], "method", false, false, false, 48))) {
                        // line 49
                        echo "                    ";
                        $context["hasValidChildren"] = true;
                        // line 50
                        echo "                ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
        ";
            // line 54
            if (((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "uri", [], "any", false, false, false, 54)) || (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "uri", [], "any", false, false, false, 54) != "#")) || ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "hasChildren", [], "any", false, false, false, 54) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "displayChildren", [], "any", false, false, false, 54)) && (isset($context["hasValidChildren"]) || array_key_exists("hasValidChildren", $context) ? $context["hasValidChildren"] : (function () { throw new RuntimeError('Variable "hasValidChildren" does not exist.', 54, $this->source); })())))) {
                // line 55
                echo "            ";
                $this->displayBlock("item_renderer", $context, $blocks);
                echo "
        ";
            }
            // line 57
            echo "    ";
        } else {
            // line 58
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 62
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("linkElement", $this->getTemplateName(), 62));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linkElement"));

        // line 63
        echo "    ";
        $macros["oro_menu"] = $this->loadTemplate("@OroNavigation/Menu/menu.html.twig", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig", 63)->unwrap();
        // line 64
        echo "
    ";
        // line 65
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "hasChildren", [], "any", false, false, false, 65) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "displayChildren", [], "any", false, false, false, 65)) && (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "level", [], "any", false, false, false, 65) === 0))) {
            // line 66
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 66, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [            // line 67
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 67, $this->source); })()), "class", [0 => "dropdown-toggle"]], 67, $context, $this->getSourceContext()), "data-toggle" => "dropdown"]);
            // line 70
            echo "    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), "uri", [], "any", false, false, false, 72)) || (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 72, $this->source); })()), "uri", [], "any", false, false, false, 72) == "#"))) {
            // line 73
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 73, $this->source); })()), ["class" => twig_call_macro($macros["oro_menu"], "macro_add_attribute_values", [            // line 74
(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 74, $this->source); })()), "class", [0 => "unclickable"]], 74, $context, $this->getSourceContext())]);
            // line 76
            echo "
        ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "level", [], "any", false, false, false, 77) > 1)) {
                // line 78
                echo "            ";
                $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 78, $this->source); })()), ["tabindex" =>  -1]);
                // line 81
                echo "        ";
            }
            // line 82
            echo "    ";
        }
        // line 83
        echo "
    <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 84, $this->source); })()), "uri", [], "any", false, false, false, 84), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["oro_menu"], "macro_attributes", [(isset($context["linkAttributes"]) || array_key_exists("linkAttributes", $context) ? $context["linkAttributes"] : (function () { throw new RuntimeError('Variable "linkAttributes" does not exist.', 84, $this->source); })())], 84, $context, $this->getSourceContext());
        echo ">
        <span class=\"title ";
        // line 85
        echo twig_escape_filter($this->env, ("title-level-" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "getLevel", [], "method", false, false, false, 85)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 85, $this->source); })()), "getLabel", [], "method", false, false, false, 85)), "html", null, true);
        echo "\">";
        echo twig_trim_filter(        $this->renderBlock("label", $context, $blocks));
        echo "</span>
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 89
    public function block_item_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("item_content", $this->getTemplateName(), 89));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_content"));

        // line 90
        echo "   ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 90, $this->source); })()), "level", [], "any", false, false, false, 90) == 1)) {
            // line 91
            echo "       ";
            $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 91, $this->source); })()), "linkAttributes", [], "any", false, false, false, 91);
            // line 92
            echo "       ";
            $this->displayBlock("linkElement", $context, $blocks);
            echo "

       <div class=\"dropdown-menu\">";
            // line 95
            $context["wrapperContent"] =             $this->renderBlock("list_wrapper", $context, $blocks);
            // line 96
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 96, $this->source); })()), "uri", [], "any", false, false, false, 96) != "#") || (isset($context["wrapperContent"]) || array_key_exists("wrapperContent", $context) ? $context["wrapperContent"] : (function () { throw new RuntimeError('Variable "wrapperContent" does not exist.', 96, $this->source); })()))) {
                // line 97
                echo (isset($context["wrapperContent"]) || array_key_exists("wrapperContent", $context) ? $context["wrapperContent"] : (function () { throw new RuntimeError('Variable "wrapperContent" does not exist.', 97, $this->source); })());
            }
            // line 99
            echo "       </div>
   ";
        } else {
            // line 101
            echo "       ";
            $this->displayParentBlock("item_content", $context, $blocks);
            echo "
   ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    // line 105
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("label", $this->getTemplateName(), 105));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 106
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "level", [], "any", false, false, false, 106) == 1) &&  !twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "getExtra", [0 => "icon"], "method", false, false, false, 106))) {
            // line 107
            echo "        <span class=\"fa-th menu-icon\" aria-hidden=\"true\"></span>
        ";
            // line 108
            $this->displayParentBlock("label", $context, $blocks);
            echo "
    ";
        } else {
            // line 110
            echo "        ";
            $this->displayParentBlock("label", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroNavigation/Menu/application_menu_desktop_sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 110,  405 => 108,  402 => 107,  400 => 106,  387 => 105,  370 => 101,  366 => 99,  363 => 97,  361 => 96,  359 => 95,  353 => 92,  350 => 91,  347 => 90,  334 => 89,  314 => 85,  308 => 84,  305 => 83,  302 => 82,  299 => 81,  296 => 78,  294 => 77,  291 => 76,  289 => 74,  287 => 73,  285 => 72,  282 => 71,  279 => 70,  277 => 67,  275 => 66,  273 => 65,  270 => 64,  267 => 63,  254 => 62,  237 => 58,  234 => 57,  228 => 55,  226 => 54,  223 => 53,  217 => 52,  214 => 51,  211 => 50,  208 => 49,  206 => 48,  204 => 47,  202 => 46,  199 => 45,  195 => 44,  192 => 43,  189 => 42,  187 => 41,  184 => 40,  181 => 39,  178 => 38,  175 => 37,  172 => 36,  169 => 35,  166 => 34,  163 => 33,  161 => 32,  159 => 31,  156 => 30,  154 => 29,  152 => 28,  150 => 27,  147 => 26,  134 => 25,  120 => 22,  117 => 20,  113 => 18,  111 => 17,  109 => 16,  107 => 15,  104 => 14,  102 => 13,  100 => 12,  97 => 11,  95 => 10,  92 => 9,  90 => 8,  88 => 7,  86 => 6,  73 => 5,  59 => 1,  57 => 3,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@OroNavigation/Menu/menu.html.twig' %}
{% import '@OroUI/macros.html.twig' as UI %}
{% import '@OroNavigation/macros.html.twig' as Navigation %}

{% block list_wrapper %}
    {# render the list of children #}
    {%- set childrenClasses = childrenClasses|merge(['menu', 'menu-level-' ~ item.level]) %}
    {%- set listAttributes = childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

    {% if item.hasChildren %}
        {% if item.level == 1 %}
            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__scrollable\">
                {{- block('list') -}}
            </div>
        {% elseif item.level == 2 %}
            <div class=\"dropdown-menu-wrapper dropdown-menu-wrapper__child\">
                {{- block('list') -}}
            </div>
        {% else %}
            {{- block('list') -}}
        {% endif %}
    {% endif %}
{% endblock %}

{% block item %}
    {% if item.hasChildren and item.displayChildren %}
        {%- set classes = classes|merge(['dropdown', 'dropdown-level-' ~ item.level]) %}
        {%- if item.level != 1 %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
        {% endif -%}
    {% elseif item.level == 1 %}
        {%- set classes = classes|merge(['dropdown', 'dropdown-empty', 'dropdown-level-' ~ item.level]) %}
    {% endif %}
    {% if item.extras is defined and item.extras.routes is defined and item.extras.routes[0] is defined %}
        {% if item.extras.routes|length > 1 %}
            {% set itemAttributes = itemAttributes|merge({'data-routes': item.extras.routes|slice(1)|json_encode })%}
        {% endif %}
        {% set itemAttributes = itemAttributes|merge({'data-route': item.extras.routes[0]})%}
    {% endif %}

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
{% endblock %}

{% block linkElement %}
    {% import '@OroNavigation/Menu/menu.html.twig' as oro_menu %}

    {% if item.hasChildren and item.displayChildren and item.level is same as(0) %}
        {% set linkAttributes = linkAttributes|merge({
            'class':       oro_menu.add_attribute_values(linkAttributes, 'class', ['dropdown-toggle']),
            'data-toggle': 'dropdown'
        }) %}
    {% endif %}

    {% if item.uri is empty or item.uri=='#' %}
        {% set linkAttributes = linkAttributes|merge({
            'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['unclickable'])
        }) %}

        {% if item.level > 1 %}
            {% set linkAttributes = linkAttributes|merge({
                'tabindex': -1
            }) %}
        {% endif %}
    {% endif %}

    <a href=\"{{ item.uri }}\"{{ oro_menu.attributes(linkAttributes) }}>
        <span class=\"title {{ 'title-level-' ~ item.getLevel()}}\" title=\"{{ item.getLabel()|trans }}\">{{ block('label')|trim|raw }}</span>
    </a>
{% endblock %}

{% block item_content %}
   {% if item.level == 1 %}
       {% set linkAttributes = item.linkAttributes %}
       {{ block('linkElement') }}

       <div class=\"dropdown-menu\">
           {%- set wrapperContent = block('list_wrapper') -%}
           {% if item.uri != '#' or wrapperContent %}
               {{- wrapperContent|raw -}}
           {% endif %}
       </div>
   {% else %}
       {{ parent() }}
   {% endif %}
{% endblock %}

{% block label %}
    {%- if item.level == 1 and not item.getExtra('icon') %}
        <span class=\"fa-th menu-icon\" aria-hidden=\"true\"></span>
        {{ parent() }}
    {% else %}
        {{ parent() }}
    {% endif -%}
{% endblock %}

", "@OroNavigation/Menu/application_menu_desktop_sided.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NavigationBundle/Resources/views/Menu/application_menu_desktop_sided.html.twig");
    }
}
