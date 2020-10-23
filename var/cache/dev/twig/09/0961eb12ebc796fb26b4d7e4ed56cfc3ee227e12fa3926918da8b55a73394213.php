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

/* competencia_deportiva/show.html.twig */
class __TwigTemplate_44bd3e3fb6812ec531f1a2a2c33818e11db571321e72389586d15ea9755b5dc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competencia_deportiva/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CompetenciaDeportiva";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>CompetenciaDeportiva</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reglamento</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 20, $this->source); })()), "reglamento", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PermiteEmpate</th>
                <td>";
        // line 24
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 24, $this->source); })()), "permiteEmpate", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>PuntosEmpate</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 28, $this->source); })()), "puntosEmpate", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PuntosPartidoGanado</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 32, $this->source); })()), "puntosPartidoGanado", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PuntosPorPresentarse</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 36, $this->source); })()), "puntosPorPresentarse", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CantidadMaximaSet</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 40, $this->source); })()), "cantidadMaximaSet", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FechaBaja</th>
                <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 44, $this->source); })()), "fechaBaja", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 44, $this->source); })()), "fechaBaja", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>HoraBaja</th>
                <td>";
        // line 48
        ((twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 48, $this->source); })()), "horaBaja", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 48, $this->source); })()), "horaBaja", [], "any", false, false, false, 48), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competencia_deportiva_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competencia_deportiva_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["competencia_deportiva"]) || array_key_exists("competencia_deportiva", $context) ? $context["competencia_deportiva"] : (function () { throw new RuntimeError('Variable "competencia_deportiva" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 57
        echo twig_include($this->env, $context, "competencia_deportiva/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competencia_deportiva/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 57,  172 => 55,  167 => 53,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CompetenciaDeportiva{% endblock %}

{% block body %}
    <h1>CompetenciaDeportiva</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ competencia_deportiva.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ competencia_deportiva.nombre }}</td>
            </tr>
            <tr>
                <th>Reglamento</th>
                <td>{{ competencia_deportiva.reglamento }}</td>
            </tr>
            <tr>
                <th>PermiteEmpate</th>
                <td>{{ competencia_deportiva.permiteEmpate ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>PuntosEmpate</th>
                <td>{{ competencia_deportiva.puntosEmpate }}</td>
            </tr>
            <tr>
                <th>PuntosPartidoGanado</th>
                <td>{{ competencia_deportiva.puntosPartidoGanado }}</td>
            </tr>
            <tr>
                <th>PuntosPorPresentarse</th>
                <td>{{ competencia_deportiva.puntosPorPresentarse }}</td>
            </tr>
            <tr>
                <th>CantidadMaximaSet</th>
                <td>{{ competencia_deportiva.cantidadMaximaSet }}</td>
            </tr>
            <tr>
                <th>FechaBaja</th>
                <td>{{ competencia_deportiva.fechaBaja ? competencia_deportiva.fechaBaja|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>HoraBaja</th>
                <td>{{ competencia_deportiva.horaBaja ? competencia_deportiva.horaBaja|date('H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('competencia_deportiva_index') }}\">back to list</a>

    <a href=\"{{ path('competencia_deportiva_edit', {'id': competencia_deportiva.id}) }}\">edit</a>

    {{ include('competencia_deportiva/_delete_form.html.twig') }}
{% endblock %}
", "competencia_deportiva/show.html.twig", "C:\\Users\\joaqo\\Desktop\\Proyectos\\gestor_competencias\\templates\\competencia_deportiva\\show.html.twig");
    }
}
