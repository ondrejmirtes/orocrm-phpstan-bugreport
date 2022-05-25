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

/* @OroNote/Note/notes.html.twig */
class __TwigTemplate_7011522213aae1ff285655d815ebe0e6 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroNote/Note/notes.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/notes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroNote/Note/notes.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_note_view")) {
            // line 2
            echo "    ";
            $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroNote/Note/notes.html.twig", 2)->unwrap();
            // line 3
            echo "
    ";
            // line 4
            ob_start();
            // line 5
            echo "        ";
            echo $this->extensions['Oro\Bundle\UIBundle\Twig\UiExtension']->renderWidget($this->env, ["widgetType" => "block", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_note_widget_notes", ["entityClass" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(            // line 8
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), true), "entityId" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.note.entity_plural_label"), "cssClass" => "list-widget notes-widget"]);
            // line 13
            echo "
    ";
            $context["widgetContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "    ";
            echo twig_call_macro($macros["UI"], "macro_scrollSubblock", [null, [0 => (isset($context["widgetContent"]) || array_key_exists("widgetContent", $context) ? $context["widgetContent"] : (function () { throw new RuntimeError('Variable "widgetContent" does not exist.', 15, $this->source); })())]], 15, $context, $this->getSourceContext());
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroNote/Note/notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 13,  59 => 9,  58 => 8,  56 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('oro_note_view') %}
    {% import '@OroUI/macros.html.twig' as UI %}

    {% set widgetContent %}
        {{ oro_widget_render({
            'widgetType': 'block',
            'url': path('oro_note_widget_notes', {
                entityClass: oro_class_name(entity, true),
                entityId: entity.id
            }),
            'title': 'oro.note.entity_plural_label'|trans,
            'cssClass': 'list-widget notes-widget',
        }) }}
    {% endset %}
    {{ UI.scrollSubblock(null, [widgetContent]) }}
{% endif %}
", "@OroNote/Note/notes.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/NoteBundle/Resources/views/Note/notes.html.twig");
    }
}
