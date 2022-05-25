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

/* @OroAction/Widget/widget/buttons.html.twig */
class __TwigTemplate_f10cf4ab5fdc0fef2ba66ff97ce9d28c extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAction/Widget/widget/buttons.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Widget/widget/buttons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAction/Widget/widget/buttons.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroAction/Widget/widget/buttons.html.twig", 1)->unwrap();
        // line 2
        if (twig_length_filter($this->env, (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "    ";
            $context["renderedButtons"] = [];
            // line 4
            echo "    ";
            $context["groups"] = [];
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 6, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 7
                echo "        ";
                $context["groupName"] = ((twig_get_attribute($this->env, $this->source, $context["button"], "group", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "group", [], "any", false, false, false, 7), null)) : (null));
                // line 8
                echo "        ";
                if ((isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 8, $this->source); })())) {
                    // line 9
                    echo "            ";
                    ob_start();
                    // line 10
                    echo "                <li>
                    ";
                    // line 11
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["button"], "template", [], "any", false, false, false, 11), "@OroAction/Widget/widget/buttons.html.twig", 11)->display(twig_array_merge($context, twig_get_attribute($this->env, $this->source, $context["button"], "getTemplateData", [0 => ["onlyLink" => true]], "method", false, false, false, 11)));
                    // line 12
                    echo "                </li>
            ";
                    $context["link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "
            ";
                    // line 15
                    $context["groups"] = twig_array_merge((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 15, $this->source); })()), [(isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 15, $this->source); })()) => twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), (isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 15, $this->source); })()), [], "array", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), (isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15), [])) : ([])), [0 => (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 15, $this->source); })())])]);
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    ob_start();
                    // line 18
                    echo "                ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["button"], "template", [], "any", false, false, false, 18), "@OroAction/Widget/widget/buttons.html.twig", 18)->display(twig_array_merge($context, twig_get_attribute($this->env, $this->source, $context["button"], "getTemplateData", [0 => ["aClass" => "btn action-button"]], "method", false, false, false, 18)));
                    // line 19
                    echo "            ";
                    $context["renderedButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 20
                    echo "            ";
                    $context["renderedButtons"] = twig_array_merge((isset($context["renderedButtons"]) || array_key_exists("renderedButtons", $context) ? $context["renderedButtons"] : (function () { throw new RuntimeError('Variable "renderedButtons" does not exist.', 20, $this->source); })()), [0 => (isset($context["renderedButton"]) || array_key_exists("renderedButton", $context) ? $context["renderedButton"] : (function () { throw new RuntimeError('Variable "renderedButton" does not exist.', 20, $this->source); })())]);
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
    <div class=\"widget-content\">
        <div>
            ";
            // line 26
            if (twig_length_filter($this->env, (isset($context["renderedButtons"]) || array_key_exists("renderedButtons", $context) ? $context["renderedButtons"] : (function () { throw new RuntimeError('Variable "renderedButtons" does not exist.', 26, $this->source); })()))) {
                // line 27
                echo "                ";
                echo twig_join_filter((isset($context["renderedButtons"]) || array_key_exists("renderedButtons", $context) ? $context["renderedButtons"] : (function () { throw new RuntimeError('Variable "renderedButtons" does not exist.', 27, $this->source); })()));
                echo "
            ";
            }
            // line 29
            echo "            ";
            if (twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 30, $this->source); })()));
                foreach ($context['_seq'] as $context["groupName"] => $context["groupButtons"]) {
                    // line 31
                    echo "                    ";
                    if ($context["groupButtons"]) {
                        // line 32
                        echo "                        ";
                        echo twig_call_macro($macros["UI"], "macro_dropdownButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                        // line 33
$context["groupName"]), "html" => twig_join_filter(                        // line 34
$context["groupButtons"])]], 32, $context, $this->getSourceContext());
                        // line 35
                        echo "
                    ";
                    }
                    // line 37
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['groupButtons'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            ";
            }
            // line 39
            echo "        </div>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAction/Widget/widget/buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  170 => 38,  164 => 37,  160 => 35,  158 => 34,  157 => 33,  155 => 32,  152 => 31,  147 => 30,  144 => 29,  138 => 27,  136 => 26,  131 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  102 => 17,  99 => 16,  97 => 15,  94 => 14,  90 => 12,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% if buttons|length %}
    {% set renderedButtons = {} %}
    {% set groups = {} %}

    {% for button in buttons %}
        {% set groupName = button.group|default(null) %}
        {% if groupName %}
            {% set link %}
                <li>
                    {% include button.template with button.getTemplateData({'onlyLink': true}) %}
                </li>
            {% endset %}

            {% set groups = groups|merge({(groupName): groups[groupName]|default([])|merge([link])}) %}
        {% else %}
            {% set renderedButton %}
                {% include button.template with button.getTemplateData({'aClass' : 'btn action-button'}) %}
            {% endset %}
            {% set renderedButtons = renderedButtons|merge([renderedButton]) %}
        {% endif %}
    {% endfor %}

    <div class=\"widget-content\">
        <div>
            {% if renderedButtons|length %}
                {{ renderedButtons|join()|raw }}
            {% endif %}
            {% if groups|length %}
                {% for groupName, groupButtons in groups %}
                    {% if groupButtons %}
                        {{ UI.dropdownButton({
                            'label': groupName|trans,
                            'html': groupButtons|join()
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        </div>
    </div>
{% endif %}
", "@OroAction/Widget/widget/buttons.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/ActionBundle/Resources/views/Widget/widget/buttons.html.twig");
    }
}
