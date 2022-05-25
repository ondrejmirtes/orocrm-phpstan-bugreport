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

/* @OroEmail/Email/widget/thread.html.twig */
class __TwigTemplate_3834d3c39f6743c6b738a28a839b38b9 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroEmail/Email/widget/thread.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/widget/thread.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroEmail/Email/widget/thread.html.twig"));

        // line 1
        echo "<div class=\"widget-content\">
    ";
        // line 2
        if (( !array_key_exists("shortEmailThread", $context) && (twig_length_filter($this->env, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 2, $this->source); })())) >= 7))) {
            // line 3
            echo "        ";
            // line 4
            echo "        ";
            $context["shortEmailThread"] = true;
            // line 5
            echo "        ";
            $context["skippedEmails"] = [];
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $context["threadViewOptions"] = ["view" => "oroemail/js/app/views/email-thread-view", "actionPanelSelector" => ".email-thread-action-panel"];
        // line 11
        echo "    ";
        $context["threadViewOptions"] = twig_array_merge((isset($context["threadViewOptions"]) || array_key_exists("threadViewOptions", $context) ? $context["threadViewOptions"] : (function () { throw new RuntimeError('Variable "threadViewOptions" does not exist.', 11, $this->source); })()), ["isBaseView" =>  !(isset($context["renderContexts"]) || array_key_exists("renderContexts", $context) ? $context["renderContexts"] : (function () { throw new RuntimeError('Variable "renderContexts" does not exist.', 11, $this->source); })())]);
        // line 12
        echo "    <div class=\"thread-view\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
        // line 14
        echo twig_escape_filter($this->env, json_encode((isset($context["threadViewOptions"]) || array_key_exists("threadViewOptions", $context) ? $context["threadViewOptions"] : (function () { throw new RuntimeError('Variable "threadViewOptions" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "\"
         data-page-component-name=\"email-thread\"
         data-layout=\"separate\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["thread"]) || array_key_exists("thread", $context) ? $context["thread"] : (function () { throw new RuntimeError('Variable "thread" does not exist.', 17, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 18
            echo "            ";
            if ((((array_key_exists("shortEmailThread", $context) && (isset($context["shortEmailThread"]) || array_key_exists("shortEmailThread", $context) ? $context["shortEmailThread"] : (function () { throw new RuntimeError('Variable "shortEmailThread" does not exist.', 18, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) > 2)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) < (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 18) - 1)))) {
                // line 19
                echo "                ";
                $context["skippedEmails"] = twig_array_merge((isset($context["skippedEmails"]) || array_key_exists("skippedEmails", $context) ? $context["skippedEmails"] : (function () { throw new RuntimeError('Variable "skippedEmails" does not exist.', 19, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 19)]);
                // line 20
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) == (twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 20) - 2))) {
                    // line 21
                    echo "                    <div class=\"load-more in-thread\" data-role=\"email-load-more\" data-emails-items=\"";
                    echo twig_escape_filter($this->env, json_encode((isset($context["skippedEmails"]) || array_key_exists("skippedEmails", $context) ? $context["skippedEmails"] : (function () { throw new RuntimeError('Variable "skippedEmails" does not exist.', 21, $this->source); })())), "html", null, true);
                    echo "\">
                        <span class=\"load-more__label\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.email.load_more_emails", ["%quantity%" => twig_length_filter($this->env, (isset($context["skippedEmails"]) || array_key_exists("skippedEmails", $context) ? $context["skippedEmails"] : (function () { throw new RuntimeError('Variable "skippedEmails" does not exist.', 22, $this->source); })()))]), "html", null, true);
                    echo "</span>
                    </div>
                ";
                }
                // line 25
                echo "            ";
            } else {
                // line 26
                echo "                ";
                // line 27
                echo "                ";
                $context["emailCollapsed"] =  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 27);
                // line 28
                echo "                ";
                $this->loadTemplate("@OroEmail/Email/Thread/emailItem.html.twig", "@OroEmail/Email/widget/thread.html.twig", 28)->display($context);
                // line 29
                echo "            ";
            }
            // line 30
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
</div>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroEmail/Email/widget/thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  129 => 30,  126 => 29,  123 => 28,  120 => 27,  118 => 26,  115 => 25,  109 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  78 => 17,  72 => 14,  68 => 12,  65 => 11,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-content\">
    {% if shortEmailThread is not defined and thread|length >= 7 %}
        {# if shortEmailThread is not turned off and length of thread over 6 emails -- render short thread #}
        {% set shortEmailThread = true %}
        {% set skippedEmails = [] %}
    {% endif %}
    {% set threadViewOptions = {
        view: 'oroemail/js/app/views/email-thread-view',
        actionPanelSelector: '.email-thread-action-panel',
    } %}
    {% set threadViewOptions = threadViewOptions|merge({isBaseView: not renderContexts}) %}
    <div class=\"thread-view\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"{{ threadViewOptions|json_encode }}\"
         data-page-component-name=\"email-thread\"
         data-layout=\"separate\">
        {% for email in thread|reverse %}
            {% if shortEmailThread is defined and shortEmailThread and loop.index > 2 and loop.index < (loop.length - 1) %}
                {% set skippedEmails = skippedEmails|merge([email.id]) %}
                {% if loop.index == loop.length - 2 %}
                    <div class=\"load-more in-thread\" data-role=\"email-load-more\" data-emails-items=\"{{ skippedEmails|json_encode }}\">
                        <span class=\"load-more__label\">{{ 'oro.email.load_more_emails'|trans({'%quantity%': skippedEmails|length}) }}</span>
                    </div>
                {% endif %}
            {% else %}
                {# email collapsed also can be evaluated for other conditions here #}
                {% set emailCollapsed = not loop.last %}
                {% include '@OroEmail/Email/Thread/emailItem.html.twig' %}
            {% endif %}
        {% endfor %}
    </div>
</div>
", "@OroEmail/Email/widget/thread.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/EmailBundle/Resources/views/Email/widget/thread.html.twig");
    }
}
