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

/* @OroUser/Menu/menuProfile.html.twig */
class __TwigTemplate_02bdb70ef136f5d6a881b2f584a78915 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroUser/Menu/menuProfile.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Menu/menuProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroUser/Menu/menuProfile.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <li class=\"dropdown user-menu-dropdown\" id=\"user-menu\">
        ";
            // line 3
            $context["togglerId"] = uniqid("dropdown-");
            // line 4
            echo "        <button id=\"";
            echo twig_escape_filter($this->env, (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\"
                class=\"dropdown-toggle";
            // line 5
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                echo " dropdown-toggle--no-caret";
            }
            echo "\"
                data-toggle=\"dropdown\"
                aria-label=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.user.menu.user_menu.label"), "html", null, true);
            echo "\" aria-haspopup=\"true\" aria-expanded=\"false\"
        >
            ";
            // line 9
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 10
                echo "                <span class=\"fa-user-circle\" aria-hidden=\"true\"></span>
            ";
            } else {
                // line 12
                echo "                ";
                $context["user_name"] = $this->extensions['Oro\Bundle\EntityBundle\Twig\EntityExtension']->getEntityName(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12));
                // line 13
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new RuntimeError('Variable "user_name" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "
                ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "avatar", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                    ";
                    $this->loadTemplate("@OroAttachment/Twig/picture.html.twig", "@OroUser/Menu/menuProfile.html.twig", 15)->display(twig_array_merge($context, ["file" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16), "filter" => "avatar_med", "img_attrs" => ["alt" =>                     // line 18
(isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new RuntimeError('Variable "user_name" does not exist.', 18, $this->source); })()), "class" => "avatar"]]));
                    // line 20
                    echo "                ";
                }
                // line 21
                echo "            ";
            }
            // line 22
            echo "        </button>
        ";
            // line 23
            echo $this->extensions['Oro\Bundle\NavigationBundle\Twig\MenuExtension']->render("usermenu", ["togglerId" => (isset($context["togglerId"]) || array_key_exists("togglerId", $context) ? $context["togglerId"] : (function () { throw new RuntimeError('Variable "togglerId" does not exist.', 23, $this->source); })()), "class" => "dropdown-menu-right"]);
            echo "
    </li>
";
        } else {
            // line 26
            echo "    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
            echo "</a></li>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroUser/Menu/menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  89 => 18,  88 => 16,  86 => 15,  84 => 14,  79 => 13,  76 => 12,  72 => 10,  70 => 9,  65 => 7,  58 => 5,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
    <li class=\"dropdown user-menu-dropdown\" id=\"user-menu\">
        {% set togglerId = 'dropdown-'|uniqid %}
        <button id=\"{{ togglerId }}\"
                class=\"dropdown-toggle{% if isMobileVersion() %} dropdown-toggle--no-caret{% endif %}\"
                data-toggle=\"dropdown\"
                aria-label=\"{{ 'oro.user.menu.user_menu.label'|trans }}\" aria-haspopup=\"true\" aria-expanded=\"false\"
        >
            {% if isMobileVersion() %}
                <span class=\"fa-user-circle\" aria-hidden=\"true\"></span>
            {% else %}
                {% set user_name = app.user|oro_format_name %}
                {{ user_name }}
                {% if app.user.avatar %}
                    {% include '@OroAttachment/Twig/picture.html.twig' with {
                        file: app.user.avatar,
                        filter: 'avatar_med',
                        img_attrs: { alt: user_name, class: 'avatar' },
                    } %}
                {%  endif %}
            {% endif %}
        </button>
        {{ oro_menu_render('usermenu', {togglerId: togglerId, class:'dropdown-menu-right'}) }}
    </li>
{% else %}
    <li><a href=\"{{ path('oro_user_security_login') }}\">{{ 'Login'|trans }}</a></li>
{% endif %}
", "@OroUser/Menu/menuProfile.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/UserBundle/Resources/views/Menu/menuProfile.html.twig");
    }
}
