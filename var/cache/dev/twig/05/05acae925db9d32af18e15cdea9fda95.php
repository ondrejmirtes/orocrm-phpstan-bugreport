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

/* @OroAttachment/Form/mergeValue.html.twig */
class __TwigTemplate_caae90e9bfb606b30cd21c60bf2ad03d extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroAttachment/Form/mergeValue.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Form/mergeValue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroAttachment/Form/mergeValue.html.twig"));

        // line 9
        ob_start();
        // line 10
        echo "    <span class=\"empty\">-- ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.entity_merge.form.empty"), "html", null, true);
        echo " --</span>
";
        $context["empty_cell"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if (twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "    <ul>
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 16
                echo "            <li>
                ";
                // line 17
                $context["options"] = (($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getTypeIsImage(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 17), "mimeType", [], "any", false, false, false, 17))) ? (["galleryId" => "merge-attachments"]) : ([]));
                // line 18
                echo "                ";
                echo $this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFileView($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 18), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 18, $this->source); })()));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
";
        } else {
            // line 23
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["empty_cell"]) || array_key_exists("empty_cell", $context) ? $context["empty_cell"] : (function () { throw new RuntimeError('Variable "empty_cell" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroAttachment/Form/mergeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  81 => 21,  71 => 18,  69 => 17,  66 => 16,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  48 => 10,  46 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    Available variables:

    Metadata metadata     - metadata of merge
    mixed convertedValue  - value converted to string
    mixed value           - original value
    boolean isListValue   - is value represents list
#}
{% set empty_cell %}
    <span class=\"empty\">-- {{ 'oro.entity_merge.form.empty'|trans }} --</span>
{% endset %}

{% if value|length %}
    <ul>
        {% for attachment in value %}
            <li>
                {% set options = oro_type_is_image(attachment.file.mimeType) ? {'galleryId' : 'merge-attachments'} : {} %}
                {{ oro_file_view(attachment.file, options) }}
            </li>
        {% endfor %}
    </ul>
{% else %}
    {{ empty_cell }}
{% endif %}
", "@OroAttachment/Form/mergeValue.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/AttachmentBundle/Resources/views/Form/mergeValue.html.twig");
    }
}
