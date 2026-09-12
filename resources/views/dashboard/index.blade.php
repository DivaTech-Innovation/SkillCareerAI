<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - SkillCareerAI</title>

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
    /* =====================================================
           RESET
        ===================================================== */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #3155ff;
        --primary-dark: #2444e8;
        --purple: #7045f5;

        --bg: #f6f8fc;
        --card: #ffffff;
        --border: #e8ebf2;

        --text: #172033;
        --muted: #7b8496;

        --soft: #f0f3ff;

        --success: #20b981;
        --warning: #f59e0b;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--bg);
        color: var(--text);
        transition: .25s ease;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    button,
    input {
        font-family: inherit;
    }

    button {
        border: none;
    }


    /* =====================================================
           LAYOUT
        ===================================================== */

    .dashboard {
        min-height: 100vh;
    }


    /* =====================================================
           SIDEBAR
        ===================================================== */

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;

        width: 250px;

        background: var(--card);
        border-right: 1px solid var(--border);

        padding: 22px 15px;

        z-index: 1000;

        display: flex;
        flex-direction: column;

        transition: .25s ease;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 11px;

        padding: 5px 10px 30px;

        font-size: 19px;
        font-weight: 800;
    }

    .brand-icon {
        width: 37px;
        height: 37px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 11px;

        color: white;

        background:
            linear-gradient(135deg,
                var(--primary),
                var(--purple));

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .25);
    }

    .brand-icon svg {
        width: 19px;
        height: 19px;
    }

    .brand-text span {
        color: var(--primary);
    }

    .menu-title {
        padding: 0 12px;

        margin-bottom: 10px;

        font-size: 10px;
        font-weight: 700;

        text-transform: uppercase;

        color: #9ba3b3;
    }

    .sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .sidebar-link {
        position: relative;

        display: flex;
        align-items: center;
        gap: 12px;

        padding: 11px 12px;

        border-radius: 10px;

        color: #687286;

        font-size: 13px;
        font-weight: 500;

        transition: .2s ease;
    }

    .sidebar-link svg {
        width: 17px;
        height: 17px;
    }

    .sidebar-link:hover {
        background: #f0f3ff;
        color: var(--primary);

        transform: translateX(2px);
    }

    .sidebar-link.active {
        color: white;

        background:
            linear-gradient(135deg,
                var(--primary),
                #526cff);

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .20);
    }

    .sidebar-link.active::before {
        content: "";

        position: absolute;

        left: -15px;

        width: 3px;
        height: 24px;

        border-radius: 0 5px 5px 0;

        background: var(--primary);
    }


    /* =====================================================
           USER SIDEBAR
        ===================================================== */

    .sidebar-user {
        margin-top: auto;

        padding: 15px 8px 4px;

        border-top: 1px solid var(--border);
    }

    .user-mini {
        display: flex;
        align-items: center;

        gap: 10px;
    }

    .avatar {
        width: 38px;
        height: 38px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #eaf0ff;
        color: var(--primary);

        font-size: 11px;
        font-weight: 800;
    }

    .user-mini strong {
        display: block;

        font-size: 11px;
    }

    .user-mini small {
        display: block;

        margin-top: 3px;

        color: #8b94a5;

        font-size: 9px;
    }


    /* =====================================================
           MAIN
        ===================================================== */

    .main {
        width: calc(100% - 250px);

        margin-left: 250px;

        padding: 28px 34px 45px;
    }


    /* =====================================================
           TOPBAR
        ===================================================== */

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 25px;
    }

    .welcome h1 {
        font-size: 24px;

        letter-spacing: -.7px;
    }

    .welcome p {
        margin-top: 6px;

        color: var(--muted);

        font-size: 12px;
    }

    .top-actions {
        display: flex;
        align-items: center;

        gap: 10px;
    }

    .search {
        width: 235px;

        display: flex;
        align-items: center;

        gap: 8px;

        padding: 10px 13px;

        background: var(--card);
        border: 1px solid var(--border);

        border-radius: 10px;

        transition: .2s ease;
    }

    .search:focus-within {
        border-color: var(--primary);

        box-shadow:
            0 0 0 3px rgba(49, 85, 255, .08);
    }

    .search svg {
        width: 15px;

        color: #9aa2b2;
    }

    .search input {
        width: 100%;

        border: none;
        outline: none;

        background: transparent;

        color: var(--text);

        font-size: 11px;
    }

    .search input::placeholder {
        color: #a1a8b6;
    }

    .top-btn {
        width: 39px;
        height: 39px;

        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;

        background: var(--card);
        border: 1px solid var(--border);

        border-radius: 10px;

        color: var(--muted);

        cursor: pointer;

        transition: .2s ease;
    }

    .top-btn svg {
        width: 17px;
        height: 17px;
    }

    .top-btn:hover {
        color: var(--primary);
        border-color: #cfd7ff;

        transform: translateY(-1px);
    }

    .notification-dot {
        position: absolute;

        right: 7px;
        top: 7px;

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #ff4d6d;
    }


    /* =====================================================
           FIRST LOGIN HERO
        ===================================================== */

    .start-card {
        position: relative;

        overflow: hidden;

        padding: 28px 30px;

        margin-bottom: 18px;

        border-radius: 17px;

        color: white;

        background:
            linear-gradient(135deg,
                #3155ff 0%,
                #526cff 55%,
                #7045f5 100%);

        box-shadow:
            0 15px 35px rgba(49, 85, 255, .18);
    }

    .start-card::before {
        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        right: -80px;
        top: -110px;

        border-radius: 50%;

        background: rgba(255, 255, 255, .08);
    }

    .start-card::after {
        content: "";

        position: absolute;

        width: 150px;
        height: 150px;

        right: 120px;
        bottom: -100px;

        border-radius: 50%;

        background: rgba(255, 255, 255, .06);
    }

    .start-content {
        position: relative;
        z-index: 2;

        max-width: 700px;
    }

    .start-label {
        display: inline-flex;
        align-items: center;

        gap: 7px;

        margin-bottom: 11px;

        padding: 6px 9px;

        border-radius: 7px;

        background: rgba(255, 255, 255, .13);

        font-size: 9px;
        font-weight: 700;

        letter-spacing: .3px;
    }

    .start-label svg {
        width: 13px;
        height: 13px;
    }

    .start-card h2 {
        font-size: 24px;

        letter-spacing: -.6px;
    }

    .start-card p {
        max-width: 620px;

        margin-top: 8px;

        color: rgba(255, 255, 255, .82);

        font-size: 11px;
        line-height: 1.7;
    }

    .start-actions {
        display: flex;
        align-items: center;

        gap: 9px;

        margin-top: 18px;
    }

    .start-button {
        display: inline-flex;
        align-items: center;

        gap: 7px;

        padding: 10px 15px;

        border-radius: 9px;

        background: white;
        color: var(--primary);

        font-size: 10px;
        font-weight: 800;

        transition: .2s ease;
    }

    .start-button:hover {
        transform: translateY(-2px);

        box-shadow:
            0 8px 20px rgba(0, 0, 0, .15);
    }

    .start-button svg {
        width: 14px;
        height: 14px;
    }

    .start-secondary {
        display: inline-flex;
        align-items: center;

        gap: 6px;

        padding: 10px 14px;

        border-radius: 9px;

        color: white;

        background: rgba(255, 255, 255, .10);

        border: 1px solid rgba(255, 255, 255, .18);

        font-size: 10px;
        font-weight: 600;

        transition: .2s ease;
    }

    .start-secondary:hover {
        background: rgba(255, 255, 255, .17);
    }


    /* =====================================================
           QUICK STATUS
        ===================================================== */

    .status-grid {
        display: grid;

        grid-template-columns:
            repeat(4, 1fr);

        gap: 15px;

        margin-bottom: 18px;
    }

    .status-card {
        padding: 17px;

        background: var(--card);

        border: 1px solid var(--border);

        border-radius: 14px;

        transition: .2s ease;
    }

    .status-card:hover {
        transform: translateY(-2px);

        box-shadow:
            0 10px 25px rgba(26, 39, 72, .06);
    }

    .status-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .status-title {
        color: var(--muted);

        font-size: 10px;
        font-weight: 600;
    }

    .status-icon {
        width: 33px;
        height: 33px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: var(--primary);

        background: #eef2ff;
    }

    .status-icon svg {
        width: 16px;
        height: 16px;
    }

    .status-value {
        margin-top: 14px;

        font-size: 13px;
        font-weight: 800;
    }

    .status-desc {
        margin-top: 4px;

        color: #98a0ae;

        font-size: 9px;
        line-height: 1.5;
    }


    /* =====================================================
           CONTENT GRID
        ===================================================== */

    .content-grid {
        display: grid;

        grid-template-columns: 1.45fr .8fr;

        gap: 18px;

        margin-bottom: 18px;
    }

    .card {
        padding: 20px;

        background: var(--card);

        border: 1px solid var(--border);

        border-radius: 14px;

        transition: .25s ease;
    }

    .card:hover {
        box-shadow:
            0 10px 28px rgba(26, 39, 72, .045);
    }

    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 18px;
    }

    .card-header h2 {
        font-size: 14px;
        font-weight: 700;
    }

    .card-header a {
        color: var(--primary);

        font-size: 10px;
        font-weight: 700;
    }

    .card-header a:hover {
        text-decoration: underline;
    }


    /* =====================================================
           GET STARTED
        ===================================================== */

    .step-list {
        display: flex;
        flex-direction: column;

        gap: 10px;
    }

    .step-item {
        display: flex;
        align-items: center;

        gap: 12px;

        padding: 12px;

        border: 1px solid #edf0f5;

        border-radius: 10px;

        transition: .2s ease;
    }

    .step-item:hover {
        border-color: #dbe2ff;

        background: #fbfcff;
    }

    .step-number {
        width: 35px;
        height: 35px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        background: #eef2ff;

        color: var(--primary);

        font-size: 10px;
        font-weight: 800;
    }

    .step-info {
        flex: 1;
    }

    .step-info strong {
        display: block;

        font-size: 11px;
    }

    .step-info small {
        display: block;

        margin-top: 4px;

        color: #8b93a3;

        font-size: 9px;
    }

    .step-arrow {
        width: 28px;
        height: 28px;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e2e6ef;

        border-radius: 8px;

        color: #8a94a7;
    }

    .step-arrow svg {
        width: 14px;
        height: 14px;
    }

    .step-item:hover .step-arrow {
        color: var(--primary);

        border-color: #ccd5ff;

        background: #f3f5ff;
    }


    /* =====================================================
           AI MENTOR
        ===================================================== */

    .ai-card {
        position: relative;

        overflow: hidden;

        background:
            linear-gradient(145deg,
                #f5f7ff,
                #ffffff 65%);
    }

    .ai-card::before {
        content: "";

        position: absolute;

        width: 130px;
        height: 130px;

        right: -55px;
        top: -55px;

        border-radius: 50%;

        background:
            rgba(49, 85, 255, .07);
    }

    .ai-icon {
        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 15px;

        border-radius: 14px;

        color: white;

        background:
            linear-gradient(135deg,
                var(--primary),
                var(--purple));

        box-shadow:
            0 9px 22px rgba(49, 85, 255, .22);
    }

    .ai-icon svg {
        width: 22px;
        height: 22px;
    }

    .ai-card h3 {
        font-size: 16px;
    }

    .ai-card p {
        margin-top: 8px;

        color: #788195;

        font-size: 11px;
        line-height: 1.7;
    }

    .ai-button {
        width: 100%;

        margin-top: 18px;

        padding: 11px 14px;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        border-radius: 9px;

        color: white;

        background:
            linear-gradient(135deg,
                var(--primary),
                #526cff);

        font-size: 11px;
        font-weight: 700;

        transition: .2s ease;

        box-shadow:
            0 7px 18px rgba(49, 85, 255, .18);
    }

    .ai-button:hover {
        transform: translateY(-2px);

        box-shadow:
            0 10px 24px rgba(49, 85, 255, .25);
    }

    .ai-button svg {
        width: 15px;
        height: 15px;
    }


    /* =====================================================
           ROADMAP PREVIEW
        ===================================================== */

    .roadmap-preview {
        display: flex;
        align-items: stretch;

        gap: 0;

        overflow: hidden;

        border: 1px solid #edf0f5;

        border-radius: 11px;
    }

    .roadmap-stage {
        flex: 1;

        padding: 15px;

        position: relative;

        border-right: 1px solid #edf0f5;
    }

    .roadmap-stage:last-child {
        border-right: none;
    }

    .stage-number {
        color: #a0a7b5;

        font-size: 9px;
        font-weight: 800;
    }

    .roadmap-stage h3 {
        margin-top: 7px;

        font-size: 11px;
    }

    .roadmap-stage p {
        margin-top: 5px;

        color: #8b93a2;

        font-size: 8px;

        line-height: 1.5;
    }

    .stage-icon {
        width: 29px;
        height: 29px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 9px;

        border-radius: 8px;

        background: #eef2ff;

        color: var(--primary);
    }

    .stage-icon svg {
        width: 14px;
        height: 14px;
    }


    /* =====================================================
           CAREER EMPTY STATE
        ===================================================== */

    .career-empty {
        padding: 18px;

        text-align: center;

        border: 1px dashed #dfe4ef;

        border-radius: 11px;

        background: #fafbfe;
    }

    .career-empty-icon {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 10px;

        border-radius: 11px;

        background: #eef2ff;

        color: var(--primary);
    }

    .career-empty-icon svg {
        width: 19px;
        height: 19px;
    }

    .career-empty strong {
        display: block;

        font-size: 11px;
    }

    .career-empty p {
        max-width: 310px;

        margin: 5px auto 12px;

        color: #8b93a2;

        font-size: 9px;

        line-height: 1.6;
    }

    .assessment-button {
        display: inline-flex;
        align-items: center;

        gap: 6px;

        padding: 8px 11px;

        border-radius: 8px;

        color: white;

        background: var(--primary);

        font-size: 9px;
        font-weight: 700;
    }

    .assessment-button svg {
        width: 13px;
        height: 13px;
    }


    /* =====================================================
           BOTTOM GRID
        ===================================================== */

    .bottom-grid {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 18px;
    }


    /* =====================================================
           CERTIFICATE EMPTY
        ===================================================== */

    .empty-box {
        padding: 17px;

        text-align: center;

        border: 1px dashed #dfe4ef;

        border-radius: 10px;
    }

    .empty-box-icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 9px;

        border-radius: 10px;

        background: #f0f3ff;

        color: #7180b4;
    }

    .empty-box-icon svg {
        width: 17px;
        height: 17px;
    }

    .empty-box strong {
        display: block;

        font-size: 10px;
    }

    .empty-box p {
        margin-top: 4px;

        color: #929aaa;

        font-size: 8px;

        line-height: 1.5;
    }


    /* =====================================================
           PROJECT EMPTY
        ===================================================== */

    .project-empty {
        padding: 17px;

        text-align: center;

        border: 1px dashed #dfe4ef;

        border-radius: 10px;
    }

    .project-empty-icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: 0 auto 9px;

        border-radius: 10px;

        background: #eef2ff;

        color: var(--primary);
    }

    .project-empty-icon svg {
        width: 17px;
        height: 17px;
    }

    .project-empty strong {
        display: block;

        font-size: 10px;
    }

    .project-empty p {
        margin-top: 4px;

        color: #929aaa;

        font-size: 8px;

        line-height: 1.5;
    }


    /* =====================================================
           MOBILE
        ===================================================== */

    .mobile-menu {
        display: none;

        width: 39px;
        height: 39px;

        align-items: center;
        justify-content: center;

        border-radius: 10px;

        background: var(--card);

        border: 1px solid var(--border);

        color: var(--text);

        cursor: pointer;
    }


    /* =====================================================
           DARK MODE
        ===================================================== */

    body.dark-mode {
        --bg: #0b1120;
        --card: #111827;
        --border: #202b3e;

        --text: #f3f4f6;
        --muted: #9ca3af;

        --soft: #1e293b;
    }

    body.dark-mode .sidebar {
        background: #0f172a;

        border-color: #202b3e;
    }

    body.dark-mode .sidebar-link {
        color: #9ca3af;
    }

    body.dark-mode .sidebar-link:hover {
        background: #182338;

        color: #8ea1ff;
    }

    body.dark-mode .sidebar-link.active {
        color: white;

        background:
            linear-gradient(135deg,
                #3155ff,
                #5d70ff);
    }

    body.dark-mode .sidebar-user {
        border-color: #202b3e;
    }

    body.dark-mode .avatar {
        background: #1d2a49;

        color: #9eb0ff;
    }

    body.dark-mode .search,
    body.dark-mode .top-btn {
        background: #111827;

        border-color: #29364b;
    }

    body.dark-mode .search input {
        color: white;
    }

    body.dark-mode .status-card,
    body.dark-mode .card {
        background: #111827;

        border-color: #202b3e;
    }

    body.dark-mode .ai-card {
        background:
            linear-gradient(145deg,
                #131e38,
                #111827);
    }

    body.dark-mode .step-item,
    body.dark-mode .roadmap-preview {
        border-color: #253147;
    }

    body.dark-mode .step-item:hover {
        background: #141f32;

        border-color: #33446a;
    }

    body.dark-mode .status-icon,
    body.dark-mode .step-number,
    body.dark-mode .stage-icon,
    body.dark-mode .empty-box-icon,
    body.dark-mode .career-empty-icon,
    body.dark-mode .project-empty-icon {
        background: #1d2a49;
    }

    body.dark-mode .career-empty,
    body.dark-mode .empty-box,
    body.dark-mode .project-empty {
        background: #101a2d;

        border-color: #2a3850;
    }

    body.dark-mode .roadmap-stage {
        border-color: #253147;
    }

    body.dark-mode .step-arrow {
        border-color: #334155;
    }


    /* =====================================================
           RESPONSIVE
        ===================================================== */

    @media (max-width: 1200px) {

        .status-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

        .bottom-grid {
            grid-template-columns:
                repeat(2, 1fr);
        }

    }


    @media (max-width: 1000px) {

        .sidebar {
            width: 78px;

            padding: 20px 10px;
        }

        .brand {
            justify-content: center;

            padding-left: 0;
            padding-right: 0;
        }

        .brand-text,
        .menu-title,
        .sidebar-link span,
        .sidebar-user {
            display: none;
        }

        .sidebar-link {
            justify-content: center;
        }

        .sidebar-link.active::before {
            display: none;
        }

        .main {
            width: calc(100% - 78px);

            margin-left: 78px;
        }

        .content-grid {
            grid-template-columns: 1fr;
        }

    }


    @media (max-width: 700px) {

        .main {
            padding: 20px 15px 35px;
        }

        .topbar {
            align-items: flex-start;
        }

        .welcome h1 {
            font-size: 20px;
        }

        .search {
            display: none;
        }

        .status-grid {
            grid-template-columns:
                1fr 1fr;
        }

        .bottom-grid {
            grid-template-columns: 1fr;
        }

        .start-card {
            padding: 22px;
        }

        .start-card h2 {
            font-size: 20px;
        }

        .start-actions {
            flex-direction: column;
            align-items: stretch;
        }

        .start-button,
        .start-secondary {
            justify-content: center;
        }

        .roadmap-preview {
            overflow-x: auto;
        }

        .roadmap-stage {
            min-width: 145px;
        }

    }


    @media (max-width: 480px) {

        .sidebar {
            width: 64px;
        }

        .main {
            width: calc(100% - 64px);

            margin-left: 64px;

            padding: 16px 12px 30px;
        }

        .status-grid {
            grid-template-columns: 1fr;
        }

        .top-actions {
            gap: 6px;
        }

        .top-actions .avatar {
            display: none;
        }

        .welcome p {
            max-width: 200px;

            line-height: 1.5;
        }

        .start-card h2 {
            font-size: 18px;
        }

    }


    /* =====================================================
           ANIMATION
        ===================================================== */

    @keyframes fadeUp {

        from {
            opacity: 0;

            transform:
                translateY(8px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }

    .start-card,
    .status-card,
    .card {
        animation:
            fadeUp .45s ease both;
    }

    .status-grid .status-card:nth-child(2) {
        animation-delay: .05s;
    }

    .status-grid .status-card:nth-child(3) {
        animation-delay: .1s;
    }

    .status-grid .status-card:nth-child(4) {
        animation-delay: .15s;
    }
    </style>
</head>


<body>

    <div class="dashboard">


        {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

        <aside class="sidebar">

            <a href="{{ route('dashboard') }}" class="brand">

                <div class="brand-text">
                    SkillCareer <span>AI</span>
                </div>

            </a>


            <div class="menu-title">
                Menu Utama
            </div>


            <nav class="sidebar-menu">

                {{-- Dashboard --}}
                <a href="{{ route('dashboard') }}"
                    class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">

                    <i data-lucide="layout-dashboard"></i>

                    <span>Beranda</span>

                </a>


                {{-- Assessment --}}
                <a href="{{ route('assessment') }}"
                    class="sidebar-link {{ request()->routeIs('assessment') ? 'active' : '' }}">

                    <i data-lucide="clipboard-check"></i>

                    <span>Assessment</span>

                </a>


                {{-- Roadmap --}}
                <a href="{{ route('roadmap') }}"
                    class="sidebar-link {{ request()->routeIs('roadmap') ? 'active' : '' }}">

                    <i data-lucide="map"></i>

                    <span>Roadmap Saya</span>

                </a>


                {{-- Belajar --}}
                <a href="{{ route('belajar') }}"
                    class="sidebar-link {{ request()->routeIs('belajar') ? 'active' : '' }}">

                    <i data-lucide="book-open"></i>

                    <span>Belajar</span>

                </a>


                {{-- AI Mentor --}}
                <a href="{{ route('ai.mentor') }}"
                    class="sidebar-link {{ request()->routeIs('ai.mentor*') ? 'active' : '' }}">

                    <i data-lucide="bot"></i>

                    <span>AI Mentor</span>

                </a>


                {{-- Sertifikat --}}
                <a href="{{ route('certificate') }}"
                    class="sidebar-link {{ request()->routeIs('certificate') ? 'active' : '' }}">

                    <i data-lucide="award"></i>

                    <span>Sertifikat</span>

                </a>


                {{-- Pengaturan --}}
                <a href="{{ route('pengaturan') }}"
                    class="sidebar-link {{ request()->routeIs('pengaturan') ? 'active' : '' }}">

                    <i data-lucide="settings"></i>

                    <span>Pengaturan</span>

                </a>

            </nav>


            {{-- =================================================
             USER
        ================================================== --}}

            <div class="sidebar-user">

                <div class="user-mini">

                    <div class="avatar">

                        {{ strtoupper(substr(Auth::user()->name ?? 'US', 0, 2)) }}

                    </div>


                    <div>

                        <strong>
                            {{ Auth::user()->name ?? 'User' }}
                        </strong>

                        <small>
                            New Explorer
                        </small>

                    </div>

                </div>

            </div>

        </aside>



        {{-- =====================================================
         MAIN
    ====================================================== --}}

        <main class="main">


            {{-- =================================================
             TOPBAR
        ================================================== --}}

            <div class="topbar">

                <div class="welcome">

                    <h1>
                        Halo, {{ Auth::user()->name ?? 'User' }}!
                    </h1>

                    <p>
                        Selamat datang di SkillCareer AI.
                        Yuk mulai perjalanan kariermu.
                    </p>

                </div>


                <div class="top-actions">

                    {{-- Search --}}
                    <div class="search">

                        <i data-lucide="search"></i>

                        <input type="text" placeholder="Cari materi, roadmap...">

                    </div>


                    {{-- Theme --}}
                    <button type="button" class="top-btn" onclick="toggleTheme()" id="themeToggle" title="Ganti tema">

                        <i data-lucide="moon"></i>

                    </button>


                    {{-- Notification --}}
                    <button type="button" class="top-btn" title="Notifikasi">

                        <i data-lucide="bell"></i>

                        <span class="notification-dot"></span>

                    </button>


                    {{-- Avatar --}}
                    <div class="avatar">

                        {{ strtoupper(substr(Auth::user()->name ?? 'US', 0, 2)) }}

                    </div>

                </div>

            </div>



            {{-- =================================================
             FIRST LOGIN WELCOME
        ================================================== --}}

            <section class="start-card">

                <div class="start-content">

                    <div class="start-label">

                        <i data-lucide="sparkles"></i>

                        LANGKAH PERTAMA

                    </div>


                    <h2>
                        Mulai Bangun Masa Depanmu.
                    </h2>


                    <p>
                        Kamu baru saja memulai perjalanan bersama
                        SkillCareer AI. Kenali potensimu melalui
                        assessment, tentukan arah karier, lalu
                        mulai belajar dengan roadmap yang sesuai
                        dengan tujuanmu.
                    </p>


                    <div class="start-actions">

                        <a href="{{ route('assessment') }}" class="start-button">

                            Mulai Assessment

                            <i data-lucide="arrow-right"></i>

                        </a>


                        <a href="{{ route('roadmap') }}" class="start-secondary">

                            Lihat Roadmap

                            <i data-lucide="map"></i>

                        </a>

                    </div>

                </div>

            </section>



            {{-- =================================================
             QUICK STATUS
        ================================================== --}}

            <div class="status-grid">


                {{-- Profil --}}
                <div class="status-card">

                    <div class="status-top">

                        <span class="status-title">
                            Profil
                        </span>

                        <div class="status-icon">
                            <i data-lucide="user-round"></i>
                        </div>

                    </div>


                    <div class="status-value">
                        Belum lengkap
                    </div>


                    <div class="status-desc">
                        Lengkapi profil untuk pengalaman yang lebih personal.
                    </div>

                </div>


                {{-- Assessment --}}
                <div class="status-card">

                    <div class="status-top">

                        <span class="status-title">
                            Assessment
                        </span>

                        <div class="status-icon">
                            <i data-lucide="clipboard-check"></i>
                        </div>

                    </div>


                    <div class="status-value">
                        Belum dimulai
                    </div>


                    <div class="status-desc">
                        Kenali minat dan kemampuanmu terlebih dahulu.
                    </div>

                </div>


                {{-- Roadmap --}}
                <div class="status-card">

                    <div class="status-top">

                        <span class="status-title">
                            Roadmap
                        </span>

                        <div class="status-icon">
                            <i data-lucide="map"></i>
                        </div>

                    </div>


                    <div class="status-value">
                        Belum ditentukan
                    </div>


                    <div class="status-desc">
                        Roadmap akan disesuaikan dengan tujuanmu.
                    </div>

                </div>


                {{-- Belajar --}}
                <div class="status-card">

                    <div class="status-top">

                        <span class="status-title">
                            Pembelajaran
                        </span>

                        <div class="status-icon">
                            <i data-lucide="book-open"></i>
                        </div>

                    </div>


                    <div class="status-value">
                        Belum dimulai
                    </div>


                    <div class="status-desc">
                        Mulai belajar setelah menentukan arah karier.
                    </div>

                </div>

            </div>



            {{-- =================================================
             START JOURNEY + AI MENTOR
        ================================================== --}}

            <div class="content-grid">


                {{-- Start Journey --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Mulai Perjalananmu
                        </h2>

                    </div>


                    <div class="step-list">


                        {{-- Step 1 --}}
                        <a href="{{ route('assessment') }}" class="step-item">

                            <div class="step-number">
                                01
                            </div>


                            <div class="step-info">

                                <strong>
                                    Kenali Dirimu
                                </strong>

                                <small>
                                    Ikuti assessment untuk mengetahui
                                    minat, kemampuan, dan potensi kariermu.
                                </small>

                            </div>


                            <div class="step-arrow">

                                <i data-lucide="arrow-right"></i>

                            </div>

                        </a>


                        {{-- Step 2 --}}
                        <a href="{{ route('roadmap') }}" class="step-item">

                            <div class="step-number">
                                02
                            </div>


                            <div class="step-info">

                                <strong>
                                    Tentukan Arah
                                </strong>

                                <small>
                                    Temukan roadmap belajar yang sesuai
                                    dengan tujuan kariermu.
                                </small>

                            </div>


                            <div class="step-arrow">

                                <i data-lucide="arrow-right"></i>

                            </div>

                        </a>


                        {{-- Step 3 --}}
                        <a href="{{ route('belajar') }}" class="step-item">

                            <div class="step-number">
                                03
                            </div>


                            <div class="step-info">

                                <strong>
                                    Mulai Belajar
                                </strong>

                                <small>
                                    Pelajari materi secara bertahap dan
                                    mulai bangun project nyata.
                                </small>

                            </div>


                            <div class="step-arrow">

                                <i data-lucide="arrow-right"></i>

                            </div>

                        </a>

                    </div>

                </div>



                {{-- AI Mentor --}}
                <div class="card ai-card">

                    <div class="ai-icon">

                        <i data-lucide="bot"></i>

                    </div>


                    <h3>
                        AI Mentor
                    </h3>


                    <p>
                        Belum tahu harus mulai dari mana?
                        Ceritakan minat atau tujuanmu kepada
                        AI Mentor dan dapatkan arahan untuk
                        langkah pertamamu.
                    </p>


                    <a href="{{ route('ai.mentor') }}" class="ai-button">

                        <i data-lucide="message-circle"></i>

                        Tanya AI Mentor

                    </a>

                </div>

            </div>



            {{-- =================================================
             ROADMAP + CAREER
        ================================================== --}}

            <div class="content-grid">


                {{-- Roadmap Preview --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Preview Roadmap
                        </h2>

                        <a href="{{ route('roadmap') }}">
                            Lihat Detail →
                        </a>

                    </div>


                    <div class="roadmap-preview">


                        {{-- Stage 1 --}}
                        <div class="roadmap-stage">

                            <div class="stage-icon">
                                <i data-lucide="code-2"></i>
                            </div>

                            <span class="stage-number">
                                01
                            </span>

                            <h3>
                                Dasar Web
                            </h3>

                            <p>
                                HTML, CSS dan konsep dasar web.
                            </p>

                        </div>


                        {{-- Stage 2 --}}
                        <div class="roadmap-stage">

                            <div class="stage-icon">
                                <i data-lucide="layout"></i>
                            </div>

                            <span class="stage-number">
                                02
                            </span>

                            <h3>
                                Frontend
                            </h3>

                            <p>
                                JavaScript dan interface.
                            </p>

                        </div>


                        {{-- Stage 3 --}}
                        <div class="roadmap-stage">

                            <div class="stage-icon">
                                <i data-lucide="server"></i>
                            </div>

                            <span class="stage-number">
                                03
                            </span>

                            <h3>
                                Backend
                            </h3>

                            <p>
                                PHP, Laravel dan API.
                            </p>

                        </div>


                        {{-- Stage 4 --}}
                        <div class="roadmap-stage">

                            <div class="stage-icon">
                                <i data-lucide="database"></i>
                            </div>

                            <span class="stage-number">
                                04
                            </span>

                            <h3>
                                Database
                            </h3>

                            <p>
                                MySQL dan integrasi data.
                            </p>

                        </div>


                        {{-- Stage 5 --}}
                        <div class="roadmap-stage">

                            <div class="stage-icon">
                                <i data-lucide="briefcase-business"></i>
                            </div>

                            <span class="stage-number">
                                05
                            </span>

                            <h3>
                                Portfolio
                            </h3>

                            <p>
                                Bangun project nyata.
                            </p>

                        </div>

                    </div>

                </div>



                {{-- Career --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Rekomendasi Karier
                        </h2>

                        <a href="{{ route('career') }}">
                            Career Hub →
                        </a>

                    </div>


                    <div class="career-empty">

                        <div class="career-empty-icon">

                            <i data-lucide="compass"></i>

                        </div>


                        <strong>
                            Kariermu belum ditentukan
                        </strong>


                        <p>
                            Selesaikan assessment terlebih dahulu
                            agar SkillCareer AI dapat memberikan
                            rekomendasi karier yang lebih sesuai.
                        </p>


                        <a href="{{ route('assessment') }}" class="assessment-button">

                            Mulai Assessment

                            <i data-lucide="arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>



            {{-- =================================================
             BOTTOM CARDS
        ================================================== --}}

            <div class="bottom-grid">


                {{-- Roadmap Saya --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Roadmap Saya
                        </h2>

                        <a href="{{ route('roadmap') }}">
                            Jelajahi →
                        </a>

                    </div>


                    <div class="empty-box">

                        <div class="empty-box-icon">

                            <i data-lucide="map"></i>

                        </div>


                        <strong>
                            Belum ada roadmap
                        </strong>


                        <p>
                            Roadmap akan muncul setelah kamu
                            menentukan arah belajar.
                        </p>

                    </div>

                </div>



                {{-- Sertifikat --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Sertifikat
                        </h2>

                        <a href="{{ route('certificate') }}">
                            Lihat →
                        </a>

                    </div>


                    <div class="empty-box">

                        <div class="empty-box-icon">

                            <i data-lucide="award"></i>

                        </div>


                        <strong>
                            Belum ada sertifikat
                        </strong>


                        <p>
                            Selesaikan pembelajaran dan project
                            untuk mendapatkan sertifikat.
                        </p>

                    </div>

                </div>



                {{-- Project --}}
                <div class="card">

                    <div class="card-header">

                        <h2>
                            Project
                        </h2>

                        <a href="{{ route('projects') }}">
                            Jelajahi →
                        </a>

                    </div>


                    <div class="project-empty">

                        <div class="project-empty-icon">

                            <i data-lucide="folder-kanban"></i>

                        </div>


                        <strong>
                            Belum ada project
                        </strong>


                        <p>
                            Project yang kamu buat akan muncul
                            di sini setelah mulai belajar.
                        </p>

                    </div>

                </div>

            </div>


        </main>

    </div>



    {{-- =====================================================
     JAVASCRIPT
====================================================== --}}

    <script>
    /* =====================================================
       LUCIDE
    ===================================================== */

    document.addEventListener('DOMContentLoaded', function() {

        lucide.createIcons();

    });



    /* =====================================================
       DARK MODE
    ===================================================== */

    function updateThemeIcon() {

        const button =
            document.getElementById('themeToggle');

        if (!button) return;

        const isDark =
            document.body.classList.contains('dark-mode');

        button.innerHTML = isDark ?
            '<i data-lucide="sun"></i>' :
            '<i data-lucide="moon"></i>';

        lucide.createIcons();

    }


    function toggleTheme() {

        const body = document.body;

        body.classList.toggle('dark-mode');


        const isDark =
            body.classList.contains('dark-mode');


        localStorage.setItem(
            'skillcareer-theme',
            isDark ? 'dark' : 'light'
        );


        updateThemeIcon();

    }



    /* =====================================================
       LOAD SAVED THEME
    ===================================================== */

    document.addEventListener(
        'DOMContentLoaded',
        function() {

            const savedTheme =
                localStorage.getItem(
                    'skillcareer-theme'
                );


            if (savedTheme === 'dark') {

                document.body.classList.add(
                    'dark-mode'
                );

            }


            updateThemeIcon();

        }
    );



    /* =====================================================
       SEARCH
    ===================================================== */

    const searchInput =
        document.querySelector(
            '.search input'
        );


    if (searchInput) {

        searchInput.addEventListener(
            'keydown',
            function(event) {

                if (event.key === 'Enter') {

                    const keyword =
                        this.value.trim();


                    if (keyword !== '') {

                        alert(
                            'Pencarian "' +
                            keyword +
                            '" akan segera tersedia.'
                        );

                    }

                }

            }
        );

    }
    </script>

</body>

</html>