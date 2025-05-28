<?php include 'header.php'; ?>
<div class="container mt-5">
  <h2>Me Contacter</h2>
  <form action="../backend/send_mail.php" method="POST">
    <div class="mb-3">
      <label for="name">Nom</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="message">Message</label>
      <textarea name="message" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
<?php include 'footer.php'; ?>
<!DOCTYPE html>
<html lang="fr">