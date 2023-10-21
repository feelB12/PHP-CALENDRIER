<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="name">Titre</label>
            <input id="name" type="text" required class="form-control" name="name" value="<?= isset($data['name']) ? h($data['name']) : ''; ?>">
            <?php if (isset($errors['name'])): ?>
                <small class="form-text text-muted"><?= $errors['name']; ?></small>
            <?php endif ; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="coach">Coach</label>
            <input id="coach" type="text" required class="form-control" name="coach" value="<?= isset($coach['name']) ? h($coach['name']) : ''; ?>">
            <?php if (isset($errors['name'])): ?>
                <small class="form-text text-muted"><?= $errors['name']; ?></small>
            <?php endif ; ?>
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="date">Date</label>
            <input id="date" type="date" required class="form-control" name="date" value="<?= isset($data['date']) ? h($data['date']) : ''; ?>">
            <?php if (isset($errors['date'])): ?>
                <small class="form-text text-muted"><?= $errors['date']; ?></small>
            <?php endif ; ?>
        </div>
    </div>
</div>
<div class="row">  
    <div class="col-sm-6">
        <div class="form-group">
        <label for="start">Début</label>
            <input id="start" type="time" class="form-control" name="start" placeholder="HH:MM" value="<?= isset($data['start']) ? h($data['start']) : ''; ?>">
            <?php if (isset($errors['start'])): ?>
                <small class="form-text text-muted"><?= $errors['start']; ?></small>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="end">Fin</label>
            <input id="end" type="time" required class="form-control" name="end" placeholder="HH:MM" value="<?= isset($data['end']) ? h($data['end']) : ''; ?>">
            <?php if (isset($errors['end'])): ?>
                <small class="form-text text-muted"><?= $errors['end']; ?></small>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control edit-description"><?= isset($data['description']) ? h($data['description']) : ''; ?></textarea>
</div>
<div class="form-group">

</div>
<div class="row">  
<div class="col-sm-6 ">
        <div class="form-group">
            <label for="date">Date de création : <?= isset($data['date']) ? h($data['date']) : ''; ?></label>
            
        </div>
    </div>
</div>
