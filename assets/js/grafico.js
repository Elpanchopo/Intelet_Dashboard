class Grafico {
    constructor(datos, etiquetas, valores, elementoId, tituloGrafico, nombreEjeX, nombreEjeY) {
      this.datos = datos;
      this.etiquetas = etiquetas;
      this.valores = valores;
      this.elementoId = elementoId;
      this.tituloGrafico = tituloGrafico;
      this.nombreEjeX = nombreEjeX;
      this.nombreEjeY = nombreEjeY;
    }
  
    crearGrafico() {
      var labels = this.etiquetas;
      var values = this.valores;
  
      var ctx = document.getElementById(this.elementoId).getContext('2d');
  
      var gradient = ctx.createLinearGradient(0, 0, 0, 400);
      gradient.addColorStop(0, 'rgba(221, 0, 0, 1)');
      gradient.addColorStop(1, 'rgba(59, 27, 111, 1)');
  
      var miGrafico = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: labels,
          datasets: [{
            label: this.tituloGrafico,
            data: values,
            backgroundColor: gradient,
            borderColor: 'rgba(59, 27, 111, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              display: true,
              title: {
                display: true,
                text: this.nombreEjeX
              }
            },
            y: {
              display: true,
              title: {
                display: true,
                text: this.nombreEjeY
              }
            }
          }
        }
      });
    }
  }
  