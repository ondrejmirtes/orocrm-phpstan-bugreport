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

/* @OroDotmailer/AddressBook/connectionButtons.html.twig */
class __TwigTemplate_ffb0851ee2a6faa43df7c1b7f0933f7f extends Template
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
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->start($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref = new \Oro\TwigInspector\Twig\NodeReference("@OroDotmailer/AddressBook/connectionButtons.html.twig", $this->getTemplateName(), 1));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/AddressBook/connectionButtons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@OroDotmailer/AddressBook/connectionButtons.html.twig"));

        // line 1
        $macros["UI"] = $this->macros["UI"] = $this->loadTemplate("@OroUI/macros.html.twig", "@OroDotmailer/AddressBook/connectionButtons.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"btn-group pull-left dotmailer-group\">
    ";
        // line 4
        if ((isset($context["addressBook"]) || array_key_exists("addressBook", $context) ? $context["addressBook"] : (function () { throw new RuntimeError('Variable "addressBook" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_dropdownItem", [["path" => "#", "data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_synchronize_adddress_book", ["id" => twig_get_attribute($this->env, $this->source,             // line 9
(isset($context["addressBook"]) || array_key_exists("addressBook", $context) ? $context["addressBook"] : (function () { throw new RuntimeError('Variable "addressBook" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "success-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.message.syncronize_scheduled"), "fail-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.message.syncronize_schedule_failed"), "action" => "sync-with-dotmailer"], "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.synchronize"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-refresh"]], 6, $context, $this->getSourceContext());
            // line 17
            echo "

        ";
            // line 19
            echo twig_call_macro($macros["UI"], "macro_dropdownItem", [["path" => "#", "data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_synchronize_adddress_book_datafields", ["id" => twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["addressBook"]) || array_key_exists("addressBook", $context) ? $context["addressBook"] : (function () { throw new RuntimeError('Variable "addressBook" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "action" => "sync-with-dotmailer"], "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.addressbook.sync_datafields"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-refresh"]], 19, $context, $this->getSourceContext());
            // line 28
            echo "

        ";
            // line 30
            echo twig_call_macro($macros["UI"], "macro_dropdownItem", [["path" => "#", "data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_marketing_list_connect", ["id" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["marketingList"]) || array_key_exists("marketingList", $context) ? $context["marketingList"] : (function () { throw new RuntimeError('Variable "marketingList" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "action" => "connect-with-dotmailer-setting-update", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.message.update"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.dialog.title.update")], "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.manage_connection"), "class" => "no-hash dotmailer-sync-btn", "iCss" => "fa-pencil-square-o"]], 30, $context, $this->getSourceContext());
            // line 41
            echo "

        <li>
            ";
            // line 44
            echo twig_call_macro($macros["UI"], "macro_deleteLink", [["dataUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_marketing_list_disconnect", ["id" => twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["addressBook"]) || array_key_exists("addressBook", $context) ? $context["addressBook"] : (function () { throw new RuntimeError('Variable "addressBook" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "dataRedirect" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_marketing_list_view", ["id" => twig_get_attribute($this->env, $this->source,             // line 46
(isset($context["marketingList"]) || array_key_exists("marketingList", $context) ? $context["marketingList"] : (function () { throw new RuntimeError('Variable "marketingList" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "dataMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.confirmation.disconnect"), "aCss" => "no-hash remove-button", "id" => "btn-remove-dotmailer-connection", "entity_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.name"), "successMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.message.disconnect"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.disconnect"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.disconnect")]], 44, $context, $this->getSourceContext());
            // line 54
            echo "
        </li>
        ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
        ";
            // line 58
            echo twig_call_macro($macros["UI"], "macro_dropdownButton", [["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.group_name"), "iCss" => "fa-cog", "html" =>             // line 61
(isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 61, $this->source); })())]], 58, $context, $this->getSourceContext());
            // line 62
            echo "
    ";
        } else {
            // line 64
            echo "        ";
            echo twig_call_macro($macros["UI"], "macro_link", [["path" => "#", "data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("oro_dotmailer_marketing_list_connect", ["id" => twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["marketingList"]) || array_key_exists("marketingList", $context) ? $context["marketingList"] : (function () { throw new RuntimeError('Variable "marketingList" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "action" => "connect-with-dotmailer-setting-update", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.message.connect"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.dialog.title.connect")], "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("oro.dotmailer.connection.button.connect"), "class" => "no-hash btn dotmailer-sync-btn", "iCss" => "icon-dotmailer"]], 64, $context, $this->getSourceContext());
            // line 75
            echo "
    ";
        }
        // line 77
        echo "</div>
<script type=\"text/javascript\">
    loadModules(['orodotmailer/js/sync-buttons-handler'], function(Handler){
        new Handler('.dotmailer-sync-btn');
    });
</script>
";
        
        $__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21->end($__inspector_865e366d3e0af019d2bb3894b5e021e8d7895a0e74c8a58c200b70decfb8db21_ref);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@OroDotmailer/AddressBook/connectionButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 77,  103 => 75,  101 => 67,  99 => 64,  95 => 62,  93 => 61,  92 => 58,  89 => 57,  84 => 54,  82 => 46,  81 => 45,  80 => 44,  75 => 41,  73 => 33,  72 => 30,  68 => 28,  66 => 22,  65 => 19,  61 => 17,  59 => 9,  57 => 6,  54 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@OroUI/macros.html.twig' as UI %}

<div class=\"btn-group pull-left dotmailer-group\">
    {% if addressBook %}
        {% set html %}
        {{ UI.dropdownItem({
            'path': '#',
            'data': {
                'url': path('oro_dotmailer_synchronize_adddress_book', {id: addressBook.id}),
                'success-message': 'oro.dotmailer.connection.message.syncronize_scheduled'|trans,
                'fail-message':  'oro.dotmailer.connection.message.syncronize_schedule_failed'|trans,
                'action': 'sync-with-dotmailer'
            },
            'label': 'oro.dotmailer.connection.button.synchronize'|trans,
            'class': 'no-hash dotmailer-sync-btn',
            'iCss': 'fa-refresh'
        }) }}

        {{ UI.dropdownItem({
            'path': '#',
            'data': {
                'url': path('oro_dotmailer_synchronize_adddress_book_datafields', {id: addressBook.id}),
                'action': 'sync-with-dotmailer'
            },
            'label': 'oro.dotmailer.addressbook.sync_datafields'|trans,
            'class': 'no-hash dotmailer-sync-btn',
            'iCss': 'fa-refresh'
        }) }}

        {{ UI.dropdownItem({
            'path': '#',
            'data': {
                'url': path('oro_dotmailer_marketing_list_connect', {id: marketingList.id}),
                'action': 'connect-with-dotmailer-setting-update',
                'message': 'oro.dotmailer.connection.message.update'|trans,
                'title': 'oro.dotmailer.connection.dialog.title.update'|trans
            },
            'label': 'oro.dotmailer.connection.button.manage_connection'|trans,
            'class': 'no-hash dotmailer-sync-btn',
            'iCss': 'fa-pencil-square-o'
        }) }}

        <li>
            {{  UI.deleteLink({
                'dataUrl': path('oro_dotmailer_marketing_list_disconnect', {id: addressBook.id}),
                'dataRedirect': path('oro_marketing_list_view', {id: marketingList.id}),
                'dataMessage': 'oro.dotmailer.connection.confirmation.disconnect'|trans,
                'aCss': 'no-hash remove-button',
                'id': 'btn-remove-dotmailer-connection',
                'entity_label': 'oro.dotmailer.connection.name'|trans,
                'successMessage': 'oro.dotmailer.connection.message.disconnect'|trans,
                'title': 'oro.dotmailer.connection.button.disconnect'|trans,
                'label': 'oro.dotmailer.connection.button.disconnect'|trans
            }) }}
        </li>
        {% endset %}

        {{ UI.dropdownButton({
            'label': 'oro.dotmailer.connection.button.group_name'|trans,
            'iCss': 'fa-cog',
            'html': html
        }) }}
    {% else %}
        {{ UI.link({
            'path': '#',
            'data': {
                'url': path('oro_dotmailer_marketing_list_connect', {id: marketingList.id}),
                'action': 'connect-with-dotmailer-setting-update',
                'message': 'oro.dotmailer.connection.message.connect'|trans,
                'title': 'oro.dotmailer.connection.dialog.title.connect'|trans
            },
            'label': 'oro.dotmailer.connection.button.connect'|trans,
            'class': 'no-hash btn dotmailer-sync-btn',
            'iCss': 'icon-dotmailer'
        }) }}
    {% endif %}
</div>
<script type=\"text/javascript\">
    loadModules(['orodotmailer/js/sync-buttons-handler'], function(Handler){
        new Handler('.dotmailer-sync-btn');
    });
</script>
", "@OroDotmailer/AddressBook/connectionButtons.html.twig", "/home/gigi/Development/Cu.be/oro-phpstan-test/vendor/oro/crm-dotmailer/Resources/views/AddressBook/connectionButtons.html.twig");
    }
}
