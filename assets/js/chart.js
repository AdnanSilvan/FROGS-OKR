 // Initialize the Chart
 const ctx = document.getElementById('progressOverviewChart').getContext('2d');
 const progressChart = new Chart(ctx, {
   type: 'bar', // Bar chart type
   data: {
     labels: objectiveNames, // Objective names as labels on the x-axis
     datasets: [{
       label: 'Progress (%)',
       data: progressData, // Progress data for each objective
       backgroundColor: progressData.map(progress => {
         // Dynamic colors based on progress
         if (progress < 30) return 'rgba(255, 99, 132, 0.5)'; // red
         if (progress >= 30 && progress < 70) return 'rgba(255, 206, 86, 0.5)'; // yellow
         if (progress >= 70 && progress < 100) return 'rgba(75, 192, 192, 0.5)'; // green
         return 'rgba(54, 162, 235, 0.5)'; // blue for 100% completion
       }),
       borderColor: progressData.map(progress => {
         if (progress < 30) return 'rgba(255, 99, 132, 1)'; // red
         if (progress >= 30 && progress < 70) return 'rgba(255, 206, 86, 1)'; // yellow
         if (progress >= 70 && progress < 100) return 'rgba(75, 192, 192, 1)'; // green
         return 'rgba(54, 162, 235, 1)'; // blue for 100%
       }),
       borderWidth: 1
     }]
   },
   options: {
     scales: {
       y: {
         beginAtZero: true,
         max: 100, // Set max to 100 for percentage
         title: {
           display: true,
           text: 'Progress (%)'
         }
       }
     },
     plugins: {
       tooltip: {
         callbacks: {
           label: function(context) {
             const progress = context.raw;
             let emoji = '';
             if (progress < 30) emoji = '🚨 Tidak Berjalan';
             else if (progress >= 30 && progress < 70) emoji = '🛠 Sedang Berjalan';
             else if (progress >= 70 && progress < 100) emoji = '👌 Berjalan dengan Baik';
             else emoji = '🚀 Selesai';
             return `${emoji} ${progress}%`;
           }
         }
       }
     }
   }
 });