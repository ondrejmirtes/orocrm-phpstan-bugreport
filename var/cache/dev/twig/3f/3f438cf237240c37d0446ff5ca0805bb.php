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

/* @OroDataGrid/js/toolbar.html.twig */
class __TwigTemplate_0c3e29b7dd61f71f9a017cae2ec00e35 extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDataGrid/js/toolbar.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/js/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDataGrid/js/toolbar.html.twig"));

        // line 1
        echo "<script type=\"text/html\" class=\"datagrid_templates\" data-identifier=\"template-datagrid-toolbar\">
    <div class=\"grid-toolbar\">
     ";
        // line 3
        if ($this->extensions['Oro\Bundle\ViewSwitcherBundle\Twig\DemoMobileExtension']->isDesktop()) {
            // line 4
            echo "        <div class=\"grid-toolbar__part grid-toolbar__part--start\">
            <div class=\"pagination\" data-grid-pagination></div>
            <div data-grid-items-counter></div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--center\">
            <div class=\"sorting\" data-grid-sorting></div>
            <div class=\"grid-toolbar-mass-actions\">
                <div class=\"extra-actions-panel\" data-grid-extra-actions-panel></div>
            </div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--end\">
            <div class=\"grid-toolbar-tools\">
                <div class=\"page-size\" data-grid-pagesize></div>
                <div class=\"actions-panel\" data-grid-actions-panel></div>
            </div>
        </div>
    ";
        } else {
            // line 21
            echo "        <div class=\"grid-toolbar__part grid-toolbar__part--start\">
            <div class=\"page-size\" data-grid-pagesize></div>
            <div class=\"actions-panel\" data-grid-actions-panel></div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--end\">
            <div class=\"pagination-container\">
                <div class=\"pagination\" data-grid-pagination></div>
            </div>
        </div>
    ";
        }
        // line 31
        echo "    </div>
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDataGrid/js/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  71 => 21,  52 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/html\" class=\"datagrid_templates\" data-identifier=\"template-datagrid-toolbar\">
    <div class=\"grid-toolbar\">
     {% if isDesktopVersion() %}
        <div class=\"grid-toolbar__part grid-toolbar__part--start\">
            <div class=\"pagination\" data-grid-pagination></div>
            <div data-grid-items-counter></div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--center\">
            <div class=\"sorting\" data-grid-sorting></div>
            <div class=\"grid-toolbar-mass-actions\">
                <div class=\"extra-actions-panel\" data-grid-extra-actions-panel></div>
            </div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--end\">
            <div class=\"grid-toolbar-tools\">
                <div class=\"page-size\" data-grid-pagesize></div>
                <div class=\"actions-panel\" data-grid-actions-panel></div>
            </div>
        </div>
    {% else %}
        <div class=\"grid-toolbar__part grid-toolbar__part--start\">
            <div class=\"page-size\" data-grid-pagesize></div>
            <div class=\"actions-panel\" data-grid-actions-panel></div>
        </div>
        <div class=\"grid-toolbar__part grid-toolbar__part--end\">
            <div class=\"pagination-container\">
                <div class=\"pagination\" data-grid-pagination></div>
            </div>
        </div>
    {% endif %}
    </div>
</script>
", "@OroDataGrid/js/toolbar.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/platform/src/Oro/Bundle/DataGridBundle/Resources/views/js/toolbar.html.twig");
    }
}
