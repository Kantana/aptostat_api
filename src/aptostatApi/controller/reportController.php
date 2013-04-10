<?php

// Load classes
use Symfony\Component\HttpFoundation\Request;
use aptostatApi\Service\ErrorService;

// GET: /report - Return a list of reports
$app->get('/api/report', function(Request $paramBag) use ($app) {
    $reportService = new aptostatApi\Service\ReportService();

    try {
        return $app->json($reportService->getList($paramBag));
    } catch (Exception $e) {
        return $app->json(ErrorService::errorResponse($e), $e->getCode());
    }
});

// GET: /report/{id} - Return a specific report
$app->get('/api/report/{reportId}', function($reportId) use ($app) {
    $reportService = new aptostatApi\Service\ReportService();

    try {
        return $app->json($reportService->getReportById($reportId));
    } catch (Exception $e) {
        return $app->json(ErrorService::errorResponse($e), $e->getCode());
    }
});

// PUT: /report/{reportId} - Modify report
$app->put('/api/report/{reportId}', function(Request $paramBag, $reportId) use ($app) {
    $reportService = new aptostatApi\Service\ReportService();

    try {
        $reportService->modifyById($reportId, $paramBag);
        return $app->json(array('message' => 'The modification was successful'));
    } catch (Exception $e) {
        return $app->json(ErrorService::errorResponse($e), $e->getCode());
    }
});
