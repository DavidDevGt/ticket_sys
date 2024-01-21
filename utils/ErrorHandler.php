<?php
namespace Utils;

class ErrorHandler
{
    public static function handleError($message, $statusCode)
    {
        ResponseHandler::sendResponse(['error' => $message], $statusCode);
    }

    public static function notFound()
    {
        self::handleError('Not Found', 404);
    }
}