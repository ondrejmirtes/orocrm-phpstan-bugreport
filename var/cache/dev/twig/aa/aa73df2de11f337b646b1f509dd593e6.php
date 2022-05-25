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

/* @OroCalendar/macros.html.twig */
class __TwigTemplate_a0274b00135e99bc3d1ac34b039a9b8f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroCalendar/macros.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroCalendar/macros.html.twig"));

        // line 21
        echo "
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_renderOrganizer($__user__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderOrganizer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderOrganizer"));

            // line 2
            echo "    ";
            $macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroCalendar/macros.html.twig", 2)->unwrap();
            // line 3
            echo "
    <div class=\"calendar-event-organizer\">
        ";
            // line 5
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "organizerUser", [], "any", false, false, false, 5)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "organizerDisplayName", [], "any", false, false, false, 5)))) {
                // line 6
                echo "            ";
                $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroCalendar/macros.html.twig", 6)->display(twig_array_merge($context, ["sources" => (($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 7
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "organizerUser", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "avatar_xsmall")) ? ($this->extensions['Oro\Bundle\AttachmentBundle\Twig\FileExtension']->getFilteredPictureSources(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "organizerUser", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "avatar_xsmall")) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png")))]));
                // line 9
                echo "            ";
                echo twig_call_macro($macros["UI"], "macro_link", [["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 10
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "organizerUser", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "label" => twig_get_attribute($this->env, $this->source,                 // line 11
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "organizerDisplayName", [], "any", false, false, false, 11)]], 9, $context, $this->getSourceContext());
                // line 12
                echo "
        ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "organizerEmail", [], "any", false, false, false, 13)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "organizerDisplayName", [], "any", false, false, false, 13)))) {
                // line 14
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html", null, true);
                echo "\" />
            ";
                // line 15
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "organizerDisplayName", [], "any", false, false, false, 15) . " (") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "organizerEmail", [], "any", false, false, false, 15)) . ")"), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.calendar.calendarevent.na.label"), "html", null, true);
                echo "
        ";
            }
            // line 19
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_briefDateCell($__theDate__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "theDate" => $__theDate__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "briefDateCell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "briefDateCell"));

            // line 23
            echo "    <span class=\"day-of-week\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["theDate"]) || array_key_exists("theDate", $context) ? $context["theDate"] : (function () { throw new RuntimeError('Variable "theDate" does not exist.', 23, $this->source); })()), "D", $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()), "html", null, true);
            echo "</span>
    <span class=\"day-of-month\">";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["theDate"]) || array_key_exists("theDate", $context) ? $context["theDate"] : (function () { throw new RuntimeError('Variable "theDate" does not exist.', 24, $this->source); })()), "j", $this->extensions['Oro\Bundle\LocaleBundle\Twig\LocaleExtension']->getTimeZone()), "html", null, true);
            echo "</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@OroCalendar/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 24,  153 => 23,  134 => 22,  118 => 19,  112 => 17,  107 => 15,  102 => 14,  100 => 13,  97 => 12,  95 => 11,  94 => 10,  92 => 9,  90 => 7,  88 => 6,  86 => 5,  82 => 3,  79 => 2,  60 => 1,  46 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro renderOrganizer(user) %}
    {% import '@OroUI/macros.html.twig' as UI %}

    <div class=\"calendar-event-organizer\">
        {% if(user.organizerUser is not null and user.organizerDisplayName is not null) %}
            {% include '@OroAttachment/Twig/picture.html.twig' with {
                sources: oro_filtered_picture_sources(user.organizerUser.avatar, 'avatar_xsmall') ?: asset('bundles/oroui/img/avatar-xsmall.png'),
            } %}
            {{ UI.link({
                path: path('oro_user_view', { id: user.organizerUser.id}),
                label: user.organizerDisplayName
            }) }}
        {% elseif (user.organizerEmail is not null and user.organizerDisplayName is not null) %}
            <img src=\"{{ asset('bundles/oroui/img/avatar-xsmall.png') }}\" />
            {{ user.organizerDisplayName ~ ' (' ~ user.organizerEmail ~')' }}
        {% else %}
            {{ 'oro.calendar.calendarevent.na.label'|trans }}
        {% endif %}
    </div>
{% endmacro %}

{% macro briefDateCell(theDate) %}
    <span class=\"day-of-week\">{{ theDate|date('D', oro_timezone()) }}</span>
    <span class=\"day-of-month\">{{ theDate|date('j', oro_timezone()) }}</span>
{% endmacro %}
", "@OroCalendar/macros.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/calendar-bundle/Resources/views/macros.html.twig");
    }
}
