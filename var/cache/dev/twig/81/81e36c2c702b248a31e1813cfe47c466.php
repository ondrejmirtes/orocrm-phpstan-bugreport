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

/* @OroSearch/Search/searchResultItem.html.twig */
class __TwigTemplate_2342be1e93eb6c9e37c893f87fae98b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'additional_info' => [$this, 'block_additional_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSearch/Search/searchResultItem.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchResultItem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchResultItem.html.twig"));

        // line 1
        echo "<div class=\"page-title\">
    <div class=\"row clearfix\">
        <div class=\"pull-left pull-left-extra\">
            <div class=\"page-title__icon\">
                ";
        // line 5
        if (array_key_exists("recordUrl", $context)) {
            // line 6
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["recordUrl"]) || array_key_exists("recordUrl", $context) ? $context["recordUrl"] : (function () { throw new RuntimeError('Variable "recordUrl" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" ";
            if (array_key_exists("recordUrlCssClass", $context)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["recordUrlCssClass"]) || array_key_exists("recordUrlCssClass", $context) ? $context["recordUrlCssClass"] : (function () { throw new RuntimeError('Variable "recordUrlCssClass" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 8
        $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroSearch/Search/searchResultItem.html.twig", 8)->display(twig_array_merge($context, ["sources" => (((((        // line 9
array_key_exists("showImage", $context)) ? (_twig_default_filter((isset($context["showImage"]) || array_key_exists("showImage", $context) ? $context["showImage"] : (function () { throw new RuntimeError('Variable "showImage" does not exist.', 9, $this->source); })()), null)) : (null)) && ((array_key_exists("image", $context)) ? (_twig_default_filter((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), null)) : (null)))) ? ($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 9, $this->source); })()), "avatar_med")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/oroui/img/info-" . ((array_key_exists("iconType", $context)) ? (_twig_default_filter((isset($context["iconType"]) || array_key_exists("iconType", $context) ? $context["iconType"] : (function () { throw new RuntimeError('Variable "iconType" does not exist.', 9, $this->source); })()), "user")) : ("user"))) . ".png")))), "filter" => "avatar_med", "img_attrs" => ["alt" =>         // line 11
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })())]]));
        // line 13
        if (array_key_exists("recordUrl", $context)) {
            // line 14
            echo "</a>";
        }
        // line 16
        echo "            </div>
            <div class=\"";
        // line 17
        if (((array_key_exists("showImage", $context)) ? (_twig_default_filter((isset($context["showImage"]) || array_key_exists("showImage", $context) ? $context["showImage"] : (function () { throw new RuntimeError('Variable "showImage" does not exist.', 17, $this->source); })()), false)) : (false))) {
            echo "page-title__path";
        }
        echo " pull-left\">
                <div class=\"clearfix\">
                    <div class=\"page-title__entity-title-wrapper\">
                        <h1 class=\"page-title__entity-title\">
                            ";
        // line 21
        if (array_key_exists("recordUrl", $context)) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["recordUrl"]) || array_key_exists("recordUrl", $context) ? $context["recordUrl"] : (function () { throw new RuntimeError('Variable "recordUrl" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" ";
            if (array_key_exists("recordUrlCssClass", $context)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["recordUrlCssClass"]) || array_key_exists("recordUrlCssClass", $context) ? $context["recordUrlCssClass"] : (function () { throw new RuntimeError('Variable "recordUrlCssClass" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">";
        }
        // line 22
        echo "                                ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
                            ";
        // line 23
        if (array_key_exists("recordUrl", $context)) {
            echo "</a>";
        }
        // line 24
        echo "                        </h1>
                    </div>
                    ";
        // line 26
        $this->displayBlock('additional_info', $context, $blocks);
        // line 28
        echo "                </div>";
        // line 29
        ob_start();
        // line 30
        echo $this->extensions['Oro\Bundle\UIBundle\Twig\PlaceholderExtension']->renderPlaceholder($this->env, ((array_key_exists("search_item_entity_info", $context)) ? (_twig_default_filter((isset($context["search_item_entity_info"]) || array_key_exists("search_item_entity_info", $context) ? $context["search_item_entity_info"] : (function () { throw new RuntimeError('Variable "search_item_entity_info" does not exist.', 30, $this->source); })()), "search_item_entity_info")) : ("search_item_entity_info")), ["entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })())]);
        $context["searchItemEntityInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "</div>
        </div>
        <div class=\"pull-right\">
            <div class=\"sub-title\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</div>
        </div>
    </div>
    <div class=\"row inline-info\">
        <div class=\"pull-left-extra\">
            ";
        // line 40
        if (((array_key_exists("entityInfo", $context) && twig_length_filter($this->env, (isset($context["entityInfo"]) || array_key_exists("entityInfo", $context) ? $context["entityInfo"] : (function () { throw new RuntimeError('Variable "entityInfo" does not exist.', 40, $this->source); })()))) ||  !(null === (isset($context["searchItemEntityInfo"]) || array_key_exists("searchItemEntityInfo", $context) ? $context["searchItemEntityInfo"] : (function () { throw new RuntimeError('Variable "searchItemEntityInfo" does not exist.', 40, $this->source); })())))) {
            // line 41
            echo "                <ul class=\"inline\">
                    ";
            // line 42
            if ( !(null === (isset($context["searchItemEntityInfo"]) || array_key_exists("searchItemEntityInfo", $context) ? $context["searchItemEntityInfo"] : (function () { throw new RuntimeError('Variable "searchItemEntityInfo" does not exist.', 42, $this->source); })()))) {
                // line 43
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["searchItemEntityInfo"]) || array_key_exists("searchItemEntityInfo", $context) ? $context["searchItemEntityInfo"] : (function () { throw new RuntimeError('Variable "searchItemEntityInfo" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 45
            echo "                    ";
            if ((array_key_exists("entityInfo", $context) && twig_length_filter($this->env, (isset($context["entityInfo"]) || array_key_exists("entityInfo", $context) ? $context["entityInfo"] : (function () { throw new RuntimeError('Variable "entityInfo" does not exist.', 45, $this->source); })())))) {
                // line 46
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entityInfo"]) || array_key_exists("entityInfo", $context) ? $context["entityInfo"] : (function () { throw new RuntimeError('Variable "entityInfo" does not exist.', 46, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                    // line 47
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "title", [], "any", false, false, false, 47), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["info"], "value", [], "any", false, false, false, 47), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                    ";
            }
            // line 50
            echo "                </ul>
            ";
        }
        // line 52
        echo "        </div>
    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_additional_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21 = $this->env->getExtension("Oro\\TwigInspector\\Twig\\HtmlCommentsExtension");
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("additional_info", $this->getTemplateName(), 26));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additional_info"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "additional_info"));

        // line 27
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

    }

    public function getTemplateName()
    {
        return "@OroSearch/Search/searchResultItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 27,  189 => 26,  173 => 52,  169 => 50,  166 => 49,  155 => 47,  150 => 46,  147 => 45,  141 => 43,  139 => 42,  136 => 41,  134 => 40,  126 => 35,  121 => 32,  118 => 30,  116 => 29,  114 => 28,  112 => 26,  108 => 24,  104 => 23,  99 => 22,  87 => 21,  78 => 17,  75 => 16,  72 => 14,  70 => 13,  68 => 11,  67 => 9,  66 => 8,  55 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-title\">
    <div class=\"row clearfix\">
        <div class=\"pull-left pull-left-extra\">
            <div class=\"page-title__icon\">
                {% if recordUrl is defined -%}
                <a href=\"{{ recordUrl }}\" {% if recordUrlCssClass is defined %}class=\"{{ recordUrlCssClass }}\"{% endif %}>
                {%- endif -%}
                    {% include '@OroAttachment/Twig/picture.html.twig' with {
                        sources: showImage|default(null) and image|default(null) ? oro_filtered_picture_sources(image, 'avatar_med') : asset('bundles/oroui/img/info-' ~ iconType|default('user') ~ '.png'),
                        filter: 'avatar_med',
                        img_attrs: { alt: title }
                    } %}
                {%- if recordUrl is defined -%}
                </a>
                {%- endif %}
            </div>
            <div class=\"{% if showImage|default(false) %}page-title__path{% endif %} pull-left\">
                <div class=\"clearfix\">
                    <div class=\"page-title__entity-title-wrapper\">
                        <h1 class=\"page-title__entity-title\">
                            {% if recordUrl is defined %}<a href=\"{{ recordUrl }}\" {% if recordUrlCssClass is defined %}class=\"{{ recordUrlCssClass }}\"{% endif %}>{% endif %}
                                {{ title }}
                            {% if recordUrl is defined %}</a>{% endif %}
                        </h1>
                    </div>
                    {% block additional_info %}
                    {% endblock %}
                </div>
                {%- set searchItemEntityInfo -%}
                    {% placeholder search_item_entity_info with {entity: entity} %}
                {%- endset -%}
            </div>
        </div>
        <div class=\"pull-right\">
            <div class=\"sub-title\">{{ entityType }}</div>
        </div>
    </div>
    <div class=\"row inline-info\">
        <div class=\"pull-left-extra\">
            {% if (entityInfo is defined and entityInfo|length) or searchItemEntityInfo is not null %}
                <ul class=\"inline\">
                    {% if searchItemEntityInfo is not null %}
                        {{ searchItemEntityInfo }}
                    {% endif %}
                    {% if entityInfo is defined and entityInfo|length %}
                        {% for info in entityInfo %}
                            <li>{{ info.title }}: {{ info.value }}</li>
                        {% endfor %}
                    {% endif %}
                </ul>
            {% endif %}
        </div>
    </div>
</div>
", "@OroSearch/Search/searchResultItem.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SearchBundle/Resources/views/Search/searchResultItem.html.twig");
    }
}
