<?php

namespace App;

enum StatusEnum: string
{
    case Completed = 'completed';
    case Cancelled = 'cancelled';
    case Pending = 'pending';
    case InProgress = 'in-progress';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
