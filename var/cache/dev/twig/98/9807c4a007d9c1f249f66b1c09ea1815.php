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

/* @OroComment/Comment/comments.html.twig */
class __TwigTemplate_396cae6f3bac7e41c6e52e47415a44d1 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroComment/Comment/comments.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroComment/Comment/comments.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroComment/Comment/comments.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroComment/Comment/comments.html.twig", 1)->unwrap();
        // line 2
        $context["containerExtraClass"] = ((array_key_exists("containerExtraClass", $context)) ? ((isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 2, $this->source); })())) : (""));
        // line 3
        echo "<div class=\"widget-content comment-list ";
        echo twig_escape_filter($this->env, (isset($context["containerExtraClass"]) || array_key_exists("containerExtraClass", $context) ? $context["containerExtraClass"] : (function () { throw new RuntimeError('Variable "containerExtraClass" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 4
        $context["options"] = ["relatedEntityId" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "relatedEntityClassName" => $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getClassName(        // line 6
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), true), "listTemplate" => "#template-activity-item-comment", "canCreate" => $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_comment_create"), "name" => "comments"];
        // line 11
        echo "    <div class=\"comment\"
         data-page-component-module=\"orocomment/js/app/components/comment-component\"
         data-page-component-options=\"";
        // line 13
        echo twig_escape_filter($this->env, json_encode((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "\">
    </div>
</div>
";
        // line 16
        $this->loadTemplate("@OroComment/Comment/js/list.html.twig", "@OroComment/Comment/comments.html.twig", 16)->display(twig_array_merge($context, ["id" => "template-activity-item-comment"]));
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroComment/Comment/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  63 => 13,  59 => 11,  57 => 6,  56 => 5,  55 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}
{% set containerExtraClass = containerExtraClass is defined ? containerExtraClass : '' %}
<div class=\"widget-content comment-list {{ containerExtraClass }}\">
    {% set options = {
        'relatedEntityId': entity.id,
        'relatedEntityClassName': oro_class_name(entity, true),
        'listTemplate': '#template-activity-item-comment',
        'canCreate': is_granted('oro_comment_create'),
        'name': 'comments'
    } %}
    <div class=\"comment\"
         data-page-component-module=\"orocomment/js/app/components/comment-component\"
         data-page-component-options=\"{{ options|json_encode }}\">
    </div>
</div>
{% include '@OroComment/Comment/js/list.html.twig' with {'id': 'template-activity-item-comment'} %}
", "@OroComment/Comment/comments.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/CommentBundle/Resources/views/Comment/comments.html.twig");
    }
}
