document.addEventListener('DOMContentLoaded', () => {
    const showTeamButton = document.getElementById('show-team-btn');
    const teamSection = document.getElementById('team-section');
  
    showTeamButton.addEventListener('click', () => {
      if (teamSection.style.display === 'none') {
        teamSection.style.display = 'block';
        showTeamButton.textContent = 'Hide Team';
      } else {
        teamSection.style.display = 'none';
        showTeamButton.textContent = 'Show Team';
      }
    });
  });
  