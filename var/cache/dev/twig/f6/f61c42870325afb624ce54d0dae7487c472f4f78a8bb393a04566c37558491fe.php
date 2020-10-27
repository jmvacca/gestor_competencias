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

/* competencia_deportiva/new.html.twig */
class __TwigTemplate_5f1b83304d669e05c72c9cdb6fbc02487fe3b9a1aca6e7237f466b409d43c6cc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competencia_deportiva/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competencia_deportiva/new.html.twig", 1);
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

        echo "Nueva Competencia Deportiva";
        
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
        echo "    <div class=\"container\">
    ";
        // line 7
        echo twig_include($this->env, $context, "competencia_deportiva/_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        function funcion1() {
            document.getElementById(\"puntuacionwo\").value = null;
            var camposet = document.getElementById('csets').disabled = false;
            var camposet = document.getElementById('puntuacionwo').disabled = true;
        }

        function funcion2() {
            \$('#csets').prop('selectedIndex', 0);
            var camposet = document.getElementById('puntuacionwo').disabled = false;
            var camposet = document.getElementById('csets').disabled = true;
        }

        function funcion3() {
            document.getElementById(\"puntuacionwo\").value = null;
            \$('#csets').prop('selectedIndex', 0);
            var camposet = document.getElementById('puntuacionwo').disabled = true;
            var camposet = document.getElementById('csets').disabled = true;
        }

        function funcion4() {
            document.getElementById(\"PPE\").value = null;
            var camposet = document.getElementById('PPE').disabled = true;
        }

        function funcion5() {
            var camposet = document.getElementById('PPE').disabled = false;
        }

        \$(\"#AceptarModalidad\").on(\"submit\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = true;
            console.log('Modalidad Seleccionada y Configurada, Estado: ' + modalidadBool);
            \$('#alertmodal').modal();
        });

        \$(\"#buttonCM1\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = false;
            console.log('Advertencia! Modalidad No Configurada! Estado:' + modalidadBool);
            \$('#modalcam').modal();
        });

        \$(\"#AceptarModalidad2\").on(\"submit\", function(e) {
            e.preventDefault();
            \$('#modalEliminacion').modal('hide');
            modalidadBool = true;
            console.log('Modalidad Seleccionada y Configurada, Estado: ' + modalidadBool);
            \$('#alertmodal').modal();
        });

        \$(\"#buttonCM2\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = false;
            console.log('Advertencia! Modalidad No Configurada! Estado:' + modalidadBool);
            \$('#modalcam').modal();
        });

        \$(\"#CancelarNC\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalCancelarNC').modal();
        });

        \$(\"#AceptarCancelarNC\").on(\"click\", function(e) {
            window.location.href = \"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competencia_deportiva_index");
        echo "\"
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competencia_deportiva/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 81,  115 => 12,  105 => 11,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nueva Competencia Deportiva{% endblock %}

{% block body %}
    <div class=\"container\">
    {{ include('competencia_deportiva/_form.html.twig') }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">

        function funcion1() {
            document.getElementById(\"puntuacionwo\").value = null;
            var camposet = document.getElementById('csets').disabled = false;
            var camposet = document.getElementById('puntuacionwo').disabled = true;
        }

        function funcion2() {
            \$('#csets').prop('selectedIndex', 0);
            var camposet = document.getElementById('puntuacionwo').disabled = false;
            var camposet = document.getElementById('csets').disabled = true;
        }

        function funcion3() {
            document.getElementById(\"puntuacionwo\").value = null;
            \$('#csets').prop('selectedIndex', 0);
            var camposet = document.getElementById('puntuacionwo').disabled = true;
            var camposet = document.getElementById('csets').disabled = true;
        }

        function funcion4() {
            document.getElementById(\"PPE\").value = null;
            var camposet = document.getElementById('PPE').disabled = true;
        }

        function funcion5() {
            var camposet = document.getElementById('PPE').disabled = false;
        }

        \$(\"#AceptarModalidad\").on(\"submit\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = true;
            console.log('Modalidad Seleccionada y Configurada, Estado: ' + modalidadBool);
            \$('#alertmodal').modal();
        });

        \$(\"#buttonCM1\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = false;
            console.log('Advertencia! Modalidad No Configurada! Estado:' + modalidadBool);
            \$('#modalcam').modal();
        });

        \$(\"#AceptarModalidad2\").on(\"submit\", function(e) {
            e.preventDefault();
            \$('#modalEliminacion').modal('hide');
            modalidadBool = true;
            console.log('Modalidad Seleccionada y Configurada, Estado: ' + modalidadBool);
            \$('#alertmodal').modal();
        });

        \$(\"#buttonCM2\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalLiga').modal('hide');
            modalidadBool = false;
            console.log('Advertencia! Modalidad No Configurada! Estado:' + modalidadBool);
            \$('#modalcam').modal();
        });

        \$(\"#CancelarNC\").on(\"click\", function(e) {
            e.preventDefault();
            \$('#modalCancelarNC').modal();
        });

        \$(\"#AceptarCancelarNC\").on(\"click\", function(e) {
            window.location.href = \"{{ path('competencia_deportiva_index') }}\"
        });
    </script>


{% endblock %}
", "competencia_deportiva/new.html.twig", "C:\\Users\\joaqo\\Desktop\\Proyectos\\gestor_competencias\\templates\\competencia_deportiva\\new.html.twig");
    }
}
