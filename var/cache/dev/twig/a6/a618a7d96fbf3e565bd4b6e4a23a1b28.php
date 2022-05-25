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

/* @OroAttachment/Twig/picture.html.twig */
class __TwigTemplate_0d6e224c6c71d9790276cf89e0433f24 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sources' => [$this, 'block_sources'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAttachment/Twig/picture.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/picture.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Twig/picture.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAttachment/Twig/picture.html.twig", 2)->unwrap();
        // line 3
        echo "
    ";
        // line 4
        $context["picture_attrs"] = ((array_key_exists("picture_attrs", $context)) ? (_twig_default_filter((isset($context["picture_attrs"]) || array_key_exists("picture_attrs", $context) ? $context["picture_attrs"] : (function () { throw new RuntimeError('Variable "picture_attrs" does not exist.', 4, $this->source); })()), [])) : ([]));
        // line 5
        echo "    ";
        $context["file"] = ((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 5, $this->source); })()), null)) : (null));
        // line 6
        echo "    ";
        $context["filter"] = ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 6, $this->source); })()), "original")) : ("original"));
        // line 7
        echo "    ";
        $context["sources"] = _twig_default_filter(((array_key_exists("sources", $context)) ? (_twig_default_filter((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 7, $this->source); })()), $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 7, $this->source); })()), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 7, $this->source); })())))) : ($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 7, $this->source); })()), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 7, $this->source); })())))), []);
        // line 8
        echo "    ";
        $context["img_attrs"] = ((array_key_exists("img_attrs", $context)) ? (_twig_default_filter((isset($context["img_attrs"]) || array_key_exists("img_attrs", $context) ? $context["img_attrs"] : (function () { throw new RuntimeError('Variable "img_attrs" does not exist.', 8, $this->source); })()), [])) : ([]));
        // line 9
        echo "    ";
        $context["img_src"] = ((array_key_exists("img_src", $context)) ? (_twig_default_filter((isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new RuntimeError('Variable "img_src" does not exist.', 9, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["img_attrs"] ?? null), "src", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img_attrs"] ?? null), "src", [], "any", false, false, false, 9), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["img_attrs"] ?? null), "src", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img_attrs"] ?? null), "src", [], "any", false, false, false, 9), "")) : (""))));
        // line 10
        echo "
    ";
        // line 11
        if ( !twig_test_iterable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "        ";
            $context["img_src"] = (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 12, $this->source); })());
            // line 13
            echo "        ";
            $context["sources"] = [];
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, ($context["sources"] ?? null), "src", [], "any", true, true, false, 16) && twig_get_attribute($this->env, $this->source, ($context["sources"] ?? null), "sources", [], "any", true, true, false, 16))) {
            // line 17
            echo "        ";
            $context["img_src"] = twig_get_attribute($this->env, $this->source, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 17, $this->source); })()), "src", [], "any", false, false, false, 17);
            // line 18
            echo "        ";
            $context["sources"] = twig_get_attribute($this->env, $this->source, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 18, $this->source); })()), "sources", [], "any", false, false, false, 18);
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ( !(isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new RuntimeError('Variable "img_src" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "        ";
            $context["img_src"] = ((twig_get_attribute($this->env, $this->source, twig_last($this->env, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 22, $this->source); })())), "srcset", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_last($this->env, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 22, $this->source); })())), "srcset", [], "any", false, false, false, 22), _twig_default_filter(twig_last($this->env, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 22, $this->source); })())), ""))) : (_twig_default_filter(twig_last($this->env, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 22, $this->source); })())), "")));
            // line 23
            echo "        ";
            $context["sources"] = twig_slice($this->env, (isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 23, $this->source); })()), 0,  -1);
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new RuntimeError('Variable "img_src" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <picture ";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["picture_attrs"]) || array_key_exists("picture_attrs", $context) ? $context["picture_attrs"] : (function () { throw new RuntimeError('Variable "picture_attrs" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
            echo ">
            ";
            // line 28
            $this->displayBlock('sources', $context, $blocks);
            // line 33
            echo "
            ";
            // line 34
            $context["img_attrs"] = twig_array_merge(["src" => (isset($context["img_src"]) || array_key_exists("img_src", $context) ? $context["img_src"] : (function () { throw new RuntimeError('Variable "img_src" does not exist.', 34, $this->source); })())], (isset($context["img_attrs"]) || array_key_exists("img_attrs", $context) ? $context["img_attrs"] : (function () { throw new RuntimeError('Variable "img_attrs" does not exist.', 34, $this->source); })()));
            // line 35
            echo "            ";
            if ((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "                ";
                $context["img_attrs"] = twig_array_merge(["alt" => $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileTitle((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 36, $this->source); })()))], (isset($context["img_attrs"]) || array_key_exists("img_attrs", $context) ? $context["img_attrs"] : (function () { throw new RuntimeError('Variable "img_attrs" does not exist.', 36, $this->source); })()));
                // line 37
                echo "            ";
            }
            // line 38
            echo "            <img ";
            echo twig_call_macro($macros["UI"], "macro_attributes", [(isset($context["img_attrs"]) || array_key_exists("img_attrs", $context) ? $context["img_attrs"] : (function () { throw new RuntimeError('Variable "img_attrs" does not exist.', 38, $this->source); })())], 38, $context, $this->getSourceContext());
            echo ">
        </picture>
    ";
        }
        $___internal_parse_43_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_43_);
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_sources($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("sources", $this->getTemplateName(), 28));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sources"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sources"));

        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["source_attrs"]) {
            // line 30
            echo "                    <source ";
            echo twig_call_macro($macros["UI"], "macro_attributes", [$context["source_attrs"]], 30, $context, $this->getSourceContext());
            echo ">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source_attrs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroAttachment/Twig/picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 32,  179 => 30,  174 => 29,  161 => 28,  148 => 1,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  129 => 34,  126 => 33,  124 => 28,  119 => 27,  117 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  55 => 4,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set picture_attrs = picture_attrs|default({}) %}
    {% set file = file|default(null) %}
    {% set filter = filter|default('original') %}
    {% set sources = sources|default(oro_filtered_picture_sources(file, filter))|default([]) %}
    {% set img_attrs = img_attrs|default({}) %}
    {% set img_src = img_src|default(img_attrs.src|default('')) %}

    {% if not sources is iterable %}
        {% set img_src = sources %}
        {% set sources = [] %}
    {% endif %}

    {% if sources.src is defined and sources.sources is defined %}
        {% set img_src = sources.src %}
        {% set sources = sources.sources %}
    {% endif %}

    {% if not img_src %}
        {% set img_src = (sources|last).srcset|default(sources|last|default('')) %}
        {% set sources = sources|slice(0, -1) %}
    {% endif %}

    {% if img_src %}
        <picture {{ UI.attributes(picture_attrs) }}>
            {% block sources %}
                {% for source_attrs in sources %}
                    <source {{ UI.attributes(source_attrs) }}>
                {% endfor %}
            {% endblock %}

            {% set img_attrs = { src: img_src }|merge(img_attrs) %}
            {% if file %}
                {% set img_attrs = { alt: oro_file_title(file) }|merge(img_attrs) %}
            {% endif %}
            <img {{ UI.attributes(img_attrs) }}>
        </picture>
    {% endif %}
{% endapply %}
", "@OroAttachment/Twig/picture.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Twig/picture.html.twig");
    }
}
