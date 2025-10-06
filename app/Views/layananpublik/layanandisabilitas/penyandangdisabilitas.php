<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Timeline Style */
        .timeline {
            position: relative;
            margin-left: 30px;
            padding-left: 20px;
        }
        .timeline::before {
            content: "";
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #dee2e6;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 25px;
        }
        .timeline-icon {
            z-index: 1;
            font-weight: bold;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0d6efd;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,.1);
        }
        .timeline-content {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,.05);
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-4">
    <div class="card shadow border-0 rounded-3">
        <div class="card-header text-white" style="background: linear-gradient(45deg, #0d6efd, #0dcaf0);">
            <h5 class="card-title mb-0">
                <i class="bi bi-universal-access-circle me-2"></i> <?= esc($title) ?>
            </h5>
        </div>
        <div class="card-body">
            <p class="text-muted">
                Berikut adalah langkah-langkah dalam prosedur pelayanan yang disiapkan khusus bagi penyandang disabilitas:
            </p>

            <?php if (!empty($prosedur)): ?>
                <div class="timeline">
                    <?php $no=1; foreach ($prosedur as $step): ?>
                        <div class="timeline-item d-flex align-items-start">
                            <div class="timeline-icon me-3"><?= $no++ ?></div>
                            <div class="timeline-content flex-grow-1">
                                <p class="mb-0 fw-semibold"><?= esc($step) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="alert alert-warning">Belum ada prosedur yang ditambahkan.</div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>
