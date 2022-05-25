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

/* @OroWindows/states.html.twig */
class __TwigTemplate_684f9aa8de925504d0b1bedf8c629537 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroWindows/states.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWindows/states.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroWindows/states.html.twig"));

        // line 1
        if (twig_length_filter($this->env, (isset($context["windowStates"]) || array_key_exists("windowStates", $context) ? $context["windowStates"] : (function () { throw new RuntimeError('Variable "windowStates" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["windowStates"]) || array_key_exists("windowStates", $context) ? $context["windowStates"] : (function () { throw new RuntimeError('Variable "windowStates" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                // line 4
                echo "            <div id=\"widget-restored-state-";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["windowState"], "id", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["windowState"], "id", [], "any", false, false, false, 4), "none")) : ("none")), "html", null, true);
                echo "\">
                ";
                // line 5
                echo $this->extensions['Oro\Bundle\WindowsBundle\Twig\WindowsExtension']->renderFragment($context["windowState"]);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
    <script>
        loadModules(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["windowStates"]) || array_key_exists("windowStates", $context) ? $context["windowStates"] : (function () { throw new RuntimeError('Variable "windowStates" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                // line 14
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["windowState"], "renderedSuccessfully", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                        new DialogWidget({
                            autoRender: true,
                            model: new StateModel(";
                    // line 17
                    echo json_encode(["data" => twig_get_attribute($this->env, $this->source, $context["windowState"], "data", [], "any", false, false, false, 17), "id" => twig_get_attribute($this->env, $this->source, $context["windowState"], "id", [], "any", false, false, false, 17)]);
                    echo ")
                        });
                    ";
                }
                // line 20
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            });
        });
    </script>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroWindows/states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  93 => 20,  87 => 17,  83 => 15,  80 => 14,  76 => 13,  69 => 8,  60 => 5,  55 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if windowStates|length %}
    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        {% for windowState in windowStates %}
            <div id=\"widget-restored-state-{{ windowState.id|default(\"none\") }}\">
                {{ oro_window_render_fragment(windowState) }}
            </div>
        {% endfor %}
    </div>
    <script>
        loadModules(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                {% for windowState in windowStates %}
                    {% if windowState.renderedSuccessfully %}
                        new DialogWidget({
                            autoRender: true,
                            model: new StateModel({{ {'data': windowState.data, 'id': windowState.id}|json_encode|raw }})
                        });
                    {% endif %}
                {% endfor %}
            });
        });
    </script>
{% endif %}
", "@OroWindows/states.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/WindowsBundle/Resources/views/states.html.twig");
    }
}
