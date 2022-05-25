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

/* @OroSearch/Search/searchBar.html.twig */
class __TwigTemplate_b846cb99f265a6902d68494b858c4ab4 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroSearch/Search/searchBar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchBar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroSearch/Search/searchBar.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("oro_search")) {
            // line 2
            echo "    ";
            $context["searchTogglerId"] = uniqid("dropdown-");
            // line 3
            echo "    <div class=\"dropdown header-dropdown-search\">
        <button id=\"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["searchTogglerId"]) || array_key_exists("searchTogglerId", $context) ? $context["searchTogglerId"] : (function () { throw new RuntimeError('Variable "searchTogglerId" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\"
                aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\"
                data-prevent-close-on-menu-click=\"true\">
            <span class=\"fa-search\" aria-hidden=\"true\"></span>
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["searchTogglerId"]) || array_key_exists("searchTogglerId", $context) ? $context["searchTogglerId"] : (function () { throw new RuntimeError('Variable "searchTogglerId" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\"
            data-page-component-view=\"orosearch/js/app/views/search-suggestion-view\">
            ";
            // line 11
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 12
                echo "                <li class=\"nav-header nav-header-title\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
                echo "
                    <button class=\"btn-link btn-close fa-close hide-text\" data-role=\"close\">";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "</button>
                </li>
            ";
            }
            // line 16
            echo "            <li class=\"nav-content\">
                <form method=\"get\" action=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_search_results");
            echo "\" class=\"search-form\">
                    <div class=\"header-search\">
                        <select data-page-component-module=\"oro/select2-component\" name=\"from\">
                            <option value=\"\">";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
            echo "</option>
                            ";
            // line 21
            $context["searchEntities"] = [];
            // line 22
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["className"] => $context["alias"]) {
                // line 23
                echo "                                ";
                $context["entityType"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->extensions['Oro\Bundle\EntityConfigBundle\Twig\ConfigExtension']->getClassConfigValue($context["className"], "label"));
                // line 24
                echo "                                ";
                $context["searchEntities"] = twig_array_merge((isset($context["searchEntities"]) || array_key_exists("searchEntities", $context) ? $context["searchEntities"] : (function () { throw new RuntimeError('Variable "searchEntities" does not exist.', 24, $this->source); })()), [$context["alias"] => (isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 24, $this->source); })())]);
                // line 25
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['className'], $context['alias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["searchEntities"]) || array_key_exists("searchEntities", $context) ? $context["searchEntities"] : (function () { throw new RuntimeError('Variable "searchEntities" does not exist.', 27, $this->source); })())));
            foreach ($context['_seq'] as $context["alias"] => $context["name"]) {
                // line 28
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "\" data-alias=\"";
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </select>
                        <div class=\"search-field-container\">
                            <input type=\"text\" class=\"span2 search\" placeholder=\"\" name=\"search\" value=\"\" autocomplete=\"off\" data-autofocus />
                            <ul class=\"search-suggestion-list\" data-role=\"search-suggestion-list\">
                                <li class=\"loading\" data-role=\"loading\">
                                    <div class=\"loader-mask\"><div class=\"loader-frame\"></div></div>
                                </li>
                            </ul>
                            <div class=\"no-data\" data-role=\"fallback\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.search.quick_search.noresults"), "html", null, true);
            echo "</div>
                        </div>
                        ";
            // line 40
            if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isMobile()) {
                // line 41
                echo "                        <button type=\"submit\" class=\"btn btn-primary btn-icon\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
                echo "\">
                            <span class=\"fa-search\" aria-hidden=\"true\"></span>
                        </button>
                        ";
            } else {
                // line 45
                echo "                        <button type=\"submit\" class=\"btn btn-primary btn-search\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 47
            echo "                    </div>
                </form>
            </li>
        </ul>
    </div>
";
        }
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroSearch/Search/searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  162 => 45,  154 => 41,  152 => 40,  147 => 38,  137 => 30,  124 => 28,  120 => 27,  117 => 26,  111 => 25,  108 => 24,  105 => 23,  100 => 22,  98 => 21,  94 => 20,  88 => 17,  85 => 16,  79 => 13,  74 => 12,  72 => 11,  67 => 9,  60 => 5,  54 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('oro_search') %}
    {% set searchTogglerId = 'dropdown-'|uniqid %}
    <div class=\"dropdown header-dropdown-search\">
        <button id=\"{{ searchTogglerId }}\" class=\"dropdown-toggle dropdown-toggle--no-caret\" data-toggle=\"dropdown\" title=\"{{'Search'|trans}}\"
                aria-haspopup=\"true\" aria-expanded=\"false\" aria-label=\"{{ 'Search'|trans }}\"
                data-prevent-close-on-menu-click=\"true\">
            <span class=\"fa-search\" aria-hidden=\"true\"></span>
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"{{ searchTogglerId }}\"
            data-page-component-view=\"orosearch/js/app/views/search-suggestion-view\">
            {% if isMobileVersion() %}
                <li class=\"nav-header nav-header-title\">{{'Search'|trans}}
                    <button class=\"btn-link btn-close fa-close hide-text\" data-role=\"close\">{{ 'Close'|trans }}</button>
                </li>
            {% endif %}
            <li class=\"nav-content\">
                <form method=\"get\" action=\"{{ path('oro_search_results') }}\" class=\"search-form\">
                    <div class=\"header-search\">
                        <select data-page-component-module=\"oro/select2-component\" name=\"from\">
                            <option value=\"\">{{ 'All'|trans }}</option>
                            {% set searchEntities = [] %}
                            {% for className, alias in entities %}
                                {% set entityType = oro_entity_config_value(className, 'label')|trans %}
                                {% set searchEntities = searchEntities|merge({(alias) : entityType}) %}
                            {% endfor %}

                            {% for alias,name in searchEntities|sort %}
                                <option value=\"{{ alias }}\" data-alias=\"{{ alias }}\">{{ name }}</option>
                            {% endfor %}
                        </select>
                        <div class=\"search-field-container\">
                            <input type=\"text\" class=\"span2 search\" placeholder=\"\" name=\"search\" value=\"\" autocomplete=\"off\" data-autofocus />
                            <ul class=\"search-suggestion-list\" data-role=\"search-suggestion-list\">
                                <li class=\"loading\" data-role=\"loading\">
                                    <div class=\"loader-mask\"><div class=\"loader-frame\"></div></div>
                                </li>
                            </ul>
                            <div class=\"no-data\" data-role=\"fallback\">{{ 'oro.search.quick_search.noresults'|trans }}</div>
                        </div>
                        {% if isMobileVersion() %}
                        <button type=\"submit\" class=\"btn btn-primary btn-icon\" aria-label=\"{{'Search'|trans}}\">
                            <span class=\"fa-search\" aria-hidden=\"true\"></span>
                        </button>
                        {% else %}
                        <button type=\"submit\" class=\"btn btn-primary btn-search\">{{'Search'|trans}}</button>
                        {%  endif %}
                    </div>
                </form>
            </li>
        </ul>
    </div>
{% endif %}
", "@OroSearch/Search/searchBar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/SearchBundle/Resources/views/Search/searchBar.html.twig");
    }
}
