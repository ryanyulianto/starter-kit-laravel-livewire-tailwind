<?php
namespace App\Enums;

enum UserStatusEnum: string
{
    case ACTIVE = 'active';
    case NONACTIVE = 'nonactive';
}