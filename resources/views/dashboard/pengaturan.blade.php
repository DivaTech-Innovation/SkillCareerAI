<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaturan - SkillCareerAI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary: #3155ff;
        --primary-dark: #2544d8;
        --primary-soft: #eef2ff;
        --purple: #7048ff;

        --bg: #f6f8fc;
        --card: #ffffff;

        --text: #182033;
        --text-soft: #5e687b;
        --muted: #8d96a8;

        --border: #e7eaf1;
        --border-soft: #eef1f5;

        --success: #159570;
        --success-soft: #ecfdf5;

        --danger: #e5485d;
        --danger-soft: #fff1f3;

        --shadow: 0 10px 30px rgba(25, 35, 65, .045);
        --shadow-hover: 0 15px 40px rgba(25, 35, 65, .075);
    }

    html {
        scroll-behavior: smooth;
        scroll-padding-top: 25px;
    }

    body {
        font-family: "Inter", Arial, sans-serif;
        background: var(--bg);
        color: var(--text);
        min-height: 100vh;
        line-height: 1.5;
    }

    body.dark {
        --bg: #0d111b;
        --card: #151b28;

        --text: #edf1f8;
        --text-soft: #b5bdcc;
        --muted: #8993a5;

        --border: #252d3d;
        --border-soft: #202838;

        --primary-soft: #1b274b;

        --shadow: 0 10px 35px rgba(0, 0, 0, .20);
        --shadow-hover: 0 15px 45px rgba(0, 0, 0, .25);
    }

    button,
    input,
    select {
        font-family: inherit;
    }

    button {
        cursor: pointer;
    }

    a {
        text-decoration: none;
    }

    /* =========================================
           PAGE
        ========================================== */

    .page {
        padding: 30px;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* =========================================
           TOPBAR
        ========================================== */

    .topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 25px;
    }

    .topbar-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .title-icon {
        width: 50px;
        height: 50px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 15px;

        color: #fff;

        background:
            linear-gradient(135deg,
                var(--primary),
                var(--purple));

        box-shadow:
            0 10px 25px rgba(49, 85, 255, .20);
    }

    .title-icon svg {
        width: 21px;
        height: 21px;
    }

    .page-title h1 {
        font-size: 24px;
        font-weight: 800;
        letter-spacing: -.5px;
    }

    .page-title p {
        margin-top: 3px;
        color: var(--muted);
        font-size: 12px;
        font-weight: 500;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 10px 15px;

        color: var(--text-soft);
        background: var(--card);

        border: 1px solid var(--border);
        border-radius: 11px;

        font-size: 11px;
        font-weight: 700;

        transition: .2s ease;
    }

    .back-btn:hover {
        color: var(--primary);
        border-color: #cbd4ff;
        background: #fbfcff;
        transform: translateY(-1px);
    }

    /* =========================================
           ACCOUNT HERO
        ========================================== */

    .account-hero {
        position: relative;
        overflow: hidden;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 25px;

        padding: 22px 24px;
        margin-bottom: 22px;

        background:
            linear-gradient(135deg,
                #ffffff 0%,
                #f8faff 100%);

        border: 1px solid var(--border);
        border-radius: 18px;

        box-shadow: var(--shadow);
    }

    body.dark .account-hero {
        background:
            linear-gradient(135deg,
                #151b28,
                #172035);
    }

    .account-hero::after {
        content: "";

        position: absolute;

        width: 180px;
        height: 180px;

        right: -65px;
        top: -85px;

        border-radius: 50%;

        background:
            linear-gradient(135deg,
                rgba(49, 85, 255, .10),
                rgba(112, 72, 255, .08));
    }

    .account-user {
        position: relative;
        z-index: 1;

        display: flex;
        align-items: center;
        gap: 15px;
    }

    /* =========================================
           PROFILE AVATAR
        ========================================== */

    .profile-avatar {
        width: 62px;
        height: 62px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        overflow: hidden;

        border-radius: 18px;

        color: #fff;

        background:
            linear-gradient(135deg,
                var(--primary),
                var(--purple));

        font-size: 21px;
        font-weight: 800;

        box-shadow:
            0 9px 22px rgba(49, 85, 255, .18);
    }

    .profile-avatar img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }

    .account-info h2 {
        font-size: 16px;
        font-weight: 800;
    }

    .account-info p {
        margin-top: 3px;
        color: var(--muted);
        font-size: 11px;
    }

    .account-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        margin-top: 7px;
        padding: 5px 9px;

        color: var(--success);
        background: var(--success-soft);

        border: 1px solid #d6f5e8;
        border-radius: 7px;

        font-size: 9px;
        font-weight: 800;
    }

    .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #20b486;
    }

    .account-hero-right {
        position: relative;
        z-index: 1;

        display: flex;
        align-items: center;
        gap: 8px;
    }

    .mini-stat {
        min-width: 105px;
        padding: 10px 13px;

        background: rgba(255, 255, 255, .8);

        border: 1px solid var(--border);
        border-radius: 11px;
    }

    body.dark .mini-stat {
        background: #151b28;
    }

    .mini-stat span {
        display: block;

        color: var(--muted);

        font-size: 8px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .mini-stat strong {
        display: block;

        margin-top: 3px;

        font-size: 12px;
        font-weight: 800;
    }

    /* =========================================
           ALERT
        ========================================== */

    .alert {
        display: flex;
        align-items: center;
        gap: 9px;

        padding: 12px 14px;
        margin-bottom: 18px;

        border-radius: 11px;

        font-size: 11px;
        font-weight: 600;
    }

    .alert-success {
        color: #087f5b;
        background: var(--success-soft);
        border: 1px solid #c9f0df;
    }

    .alert-error {
        color: #c92d45;
        background: var(--danger-soft);
        border: 1px solid #ffd3da;
    }

    /* =========================================
           MAIN LAYOUT
        ========================================== */

    .settings-layout {
        display: grid;
        grid-template-columns: 220px minmax(0, 1fr);
        gap: 20px;
        align-items: start;
    }

    /* =========================================
           SETTINGS NAV
        ========================================== */

    .settings-nav {
        position: sticky;
        top: 20px;

        padding: 9px;

        background: var(--card);

        border: 1px solid var(--border);
        border-radius: 16px;

        box-shadow: var(--shadow);
    }

    .nav-heading {
        padding: 10px 11px 8px;

        color: var(--muted);

        font-size: 8px;
        font-weight: 800;

        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .nav-item {
        width: 100%;

        display: flex;
        align-items: center;
        gap: 10px;

        padding: 11px;

        border: none;
        border-radius: 10px;

        background: transparent;
        color: #697285;

        text-align: left;

        font-size: 11px;
        font-weight: 600;

        transition: .2s ease;
    }

    body.dark .nav-item {
        color: #aab3c3;
    }

    .nav-item svg {
        width: 15px;
        height: 15px;
        flex-shrink: 0;
    }

    .nav-item:hover {
        color: var(--primary);
        background: #f6f8ff;
    }

    body.dark .nav-item:hover {
        background: #1b2230;
    }

    .nav-item.active {
        color: var(--primary);
        background: var(--primary-soft);
        font-weight: 800;
    }

    .nav-divider {
        height: 1px;

        margin: 9px 5px;

        background: var(--border-soft);
    }

    .nav-item.logout {
        color: var(--danger);
    }

    .nav-item.logout:hover {
        background: var(--danger-soft);
    }

    /* =========================================
           CONTENT
        ========================================== */

    .settings-content {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .settings-section {
        background: var(--card);

        border: 1px solid var(--border);
        border-radius: 17px;

        box-shadow: var(--shadow);

        scroll-margin-top: 20px;

        transition: .25s ease;
    }

    .settings-section:hover {
        box-shadow: var(--shadow-hover);
    }

    /* =========================================
           SECTION HEADER
        ========================================== */

    .section-header {
        display: flex;
        align-items: center;
        gap: 12px;

        padding: 19px 21px;

        border-bottom: 1px solid var(--border-soft);
    }

    .section-icon {
        width: 38px;
        height: 38px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        color: var(--primary);
        background: var(--primary-soft);

        border-radius: 11px;
    }

    .section-icon svg {
        width: 18px;
        height: 18px;
    }

    .section-header h2 {
        font-size: 14px;
        font-weight: 800;
    }

    .section-header p {
        margin-top: 2px;

        color: var(--muted);

        font-size: 9px;
        font-weight: 500;
    }

    .section-body {
        padding: 21px;
    }

    /* =========================================
           PROFILE PREVIEW
        ========================================== */

    .profile-preview {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        margin-bottom: 21px;
        padding: 15px;

        background: #fafbfe;

        border: 1px solid var(--border-soft);
        border-radius: 13px;
    }

    body.dark .profile-preview {
        background: #101621;
    }

    .profile-preview-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    /* =========================================
           PROFILE PHOTO
        ========================================== */

    .photo-area {
        position: relative;
        flex-shrink: 0;
    }

    .preview-avatar {
        width: 58px;
        height: 58px;

        display: flex;
        align-items: center;
        justify-content: center;

        overflow: hidden;

        border-radius: 16px;

        color: white;

        background:
            linear-gradient(135deg,
                var(--primary),
                var(--purple));

        font-size: 18px;
        font-weight: 800;

        box-shadow:
            0 7px 18px rgba(49, 85, 255, .16);
    }

    .preview-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .change-photo-btn {
        position: absolute;

        right: -5px;
        bottom: -5px;

        width: 25px;
        height: 25px;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #fff;
        background: var(--primary);

        border: 3px solid var(--card);
        border-radius: 50%;

        cursor: pointer;

        transition: .2s ease;
    }

    .change-photo-btn:hover {
        background: var(--primary-dark);
        transform: scale(1.08);
    }

    .change-photo-btn svg {
        width: 11px;
        height: 11px;
    }

    .photo-input {
        display: none;
    }

    .photo-helper {
        margin-top: 6px;

        color: var(--muted);

        font-size: 8px;
        line-height: 1.5;
    }

    .preview-info h3 {
        font-size: 12px;
        font-weight: 800;
    }

    .preview-info p {
        margin-top: 2px;

        color: var(--muted);

        font-size: 9px;
    }

    .profile-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;

        padding: 6px 8px;

        color: var(--primary);
        background: var(--primary-soft);

        border-radius: 7px;

        font-size: 8px;
        font-weight: 800;
    }

    /* =========================================
           FORM
        ========================================== */

    .form-grid {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 7px;
    }

    .form-group.full {
        grid-column: 1 / -1;
    }

    label {
        color: #586276;

        font-size: 10px;
        font-weight: 800;
    }

    body.dark label {
        color: #b8c0ce;
    }

    .input-wrapper {
        position: relative;
    }

    .input-icon {
        position: absolute;

        left: 12px;
        top: 50%;

        width: 14px;
        height: 14px;

        color: #9ba3b2;

        transform: translateY(-50%);

        pointer-events: none;
    }

    .input {
        width: 100%;

        padding: 11px 12px 11px 36px;

        color: var(--text);
        background: #fafbfe;

        border: 1px solid var(--border);
        border-radius: 10px;

        outline: none;

        font-size: 11px;

        transition: .2s ease;
    }

    body.dark .input {
        background: #101621;
        border-color: #2a3344;
    }

    .input.no-icon {
        padding-left: 12px;
    }

    .input::placeholder {
        color: #b0b6c2;
    }

    .input:hover {
        border-color: #d5dbea;
    }

    .input:focus {
        border-color: var(--primary);

        background: #fff;

        box-shadow:
            0 0 0 3px rgba(49, 85, 255, .08);
    }

    body.dark .input:focus {
        background: #101621;
    }

    .save-area {
        display: flex;
        justify-content: flex-end;

        margin-top: 18px;
        padding-top: 17px;

        border-top: 1px solid var(--border-soft);
    }

    .save-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;

        padding: 10px 15px;

        color: #fff;
        background: var(--primary);

        border: none;
        border-radius: 10px;

        font-size: 10px;
        font-weight: 800;

        transition: .2s ease;
    }

    .save-btn:hover {
        background: var(--primary-dark);

        transform: translateY(-1px);

        box-shadow:
            0 8px 20px rgba(49, 85, 255, .20);
    }

    /* =========================================
           PASSWORD
        ========================================== */

    .security-note {
        display: flex;
        align-items: flex-start;
        gap: 10px;

        padding: 11px 12px;
        margin-bottom: 17px;

        color: #59657a;
        background: #f8faff;

        border: 1px solid #e8ecf8;
        border-radius: 10px;

        font-size: 9px;
        line-height: 1.5;
    }

    body.dark .security-note {
        color: #aeb7c8;
        background: #111827;
        border-color: #273149;
    }

    .security-note svg {
        width: 15px;
        height: 15px;

        flex-shrink: 0;

        color: var(--primary);
    }

    .password-grid {
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 15px;
    }

    .password-grid .form-group:first-child {
        grid-column: 1 / -1;
    }

    /* =========================================
           SETTINGS ROW
        ========================================== */

    .setting-list {
        padding: 3px 21px 7px;
    }

    .setting-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        padding: 15px 0;

        border-bottom: 1px solid var(--border-soft);
    }

    .setting-row:last-child {
        border-bottom: none;
    }

    .setting-info {
        min-width: 0;
    }

    .setting-info h3 {
        font-size: 11px;
        font-weight: 800;
    }

    .setting-info p {
        max-width: 600px;

        margin-top: 3px;

        color: var(--muted);

        font-size: 9px;
        line-height: 1.5;
    }

    .setting-control {
        flex-shrink: 0;
    }

    /* =========================================
           TOGGLE
        ========================================== */

    .toggle {
        position: relative;

        display: block;

        width: 44px;
        height: 24px;

        flex-shrink: 0;
    }

    .toggle input {
        position: absolute;

        opacity: 0;

        pointer-events: none;
    }

    .slider {
        position: absolute;
        inset: 0;

        background: #dce1ea;

        border-radius: 30px;

        transition: .25s ease;
    }

    .slider::before {
        content: "";

        position: absolute;

        width: 18px;
        height: 18px;

        left: 3px;
        top: 3px;

        border-radius: 50%;

        background: white;

        box-shadow:
            0 2px 5px rgba(0, 0, 0, .12);

        transition: .25s ease;
    }

    .toggle input:checked+.slider {
        background: var(--primary);
    }

    .toggle input:checked+.slider::before {
        transform: translateX(20px);
    }

    /* =========================================
           SELECT
        ========================================== */

    .select {
        min-width: 155px;

        padding: 9px 30px 9px 11px;

        color: #596276;
        background: #fafbfe;

        border: 1px solid var(--border);
        border-radius: 9px;

        outline: none;

        font-size: 10px;

        cursor: pointer;
    }

    body.dark .select {
        color: var(--text);
        background: #101621;
        border-color: #2a3344;
    }

    .select:focus {
        border-color: var(--primary);

        box-shadow:
            0 0 0 3px rgba(49, 85, 255, .07);
    }

    /* =========================================
           AI
        ========================================== */

    .ai-banner {
        display: flex;
        align-items: center;
        gap: 11px;

        margin: 18px 21px 7px;
        padding: 12px;

        background:
            linear-gradient(135deg,
                #f4f6ff,
                #faf8ff);

        border: 1px solid #e4e8ff;
        border-radius: 11px;
    }

    body.dark .ai-banner {
        background:
            linear-gradient(135deg,
                #18213a,
                #211b38);

        border-color: #30395a;
    }

    .ai-banner-icon {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        color: var(--primary);
        background: #fff;

        border: 1px solid #e0e5ff;
        border-radius: 9px;
    }

    body.dark .ai-banner-icon {
        background: #151b28;
        border-color: #30395a;
    }

    .ai-banner-icon svg {
        width: 15px;
        height: 15px;
    }

    .ai-banner-text strong {
        display: block;

        font-size: 10px;
        font-weight: 800;
    }

    .ai-banner-text span {
        display: block;

        margin-top: 2px;

        color: var(--muted);

        font-size: 8px;
    }

    /* =========================================
           DANGER ZONE
        ========================================== */

    .danger-section {
        border-color: #ffdce1;
    }

    .danger-section .section-icon {
        color: var(--danger);
        background: var(--danger-soft);
    }

    .danger-section .section-header {
        background: #fffafb;
        border-bottom-color: #ffeaed;
    }

    body.dark .danger-section {
        border-color: #4b2830;
    }

    body.dark .danger-section .section-header {
        background: #1b151b;
        border-bottom-color: #35232a;
    }

    .danger-content {
        padding: 6px 21px 8px;
    }

    .danger-row {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        padding: 15px 0;

        border-bottom: 1px solid #f5e5e8;
    }

    body.dark .danger-row {
        border-color: #32242a;
    }

    .danger-row:last-child {
        border-bottom: none;
    }

    .danger-info h3 {
        font-size: 11px;
        font-weight: 800;
    }

    .danger-info p {
        max-width: 560px;

        margin-top: 3px;

        color: #9a7d83;

        font-size: 9px;
        line-height: 1.5;
    }

    body.dark .danger-info p {
        color: #a78d93;
    }

    .danger-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;

        padding: 9px 13px;

        color: var(--danger);
        background: #fff5f6;

        border: 1px solid #ffcbd2;
        border-radius: 9px;

        font-size: 9px;
        font-weight: 800;

        white-space: nowrap;

        transition: .2s ease;
    }

    body.dark .danger-btn {
        background: #28171b;
        border-color: #56303a;
    }

    .danger-btn:hover {
        background: #ffe9ec;
        border-color: #ffb8c2;

        transform: translateY(-1px);
    }

    /* =========================================
           FOOTER
        ========================================== */

    .settings-footer {
        padding: 5px 0 15px;

        text-align: center;

        color: var(--muted);

        font-size: 9px;
    }

    .settings-footer strong {
        color: var(--text-soft);
    }

    /* =========================================
           RESPONSIVE
        ========================================== */

    @media (max-width: 950px) {

        .settings-layout {
            grid-template-columns: 1fr;
        }

        .settings-nav {
            position: static;

            display: flex;
            align-items: center;

            overflow-x: auto;

            gap: 4px;

            padding: 7px;
        }

        .nav-heading,
        .nav-divider {
            display: none;
        }

        .nav-item {
            width: auto;

            flex: 0 0 auto;

            white-space: nowrap;
        }
    }

    @media (max-width: 700px) {

        .page {
            padding: 18px;
        }

        .topbar {
            align-items: flex-start;
        }

        .title-icon {
            width: 44px;
            height: 44px;

            border-radius: 13px;
        }

        .page-title h1 {
            font-size: 20px;
        }

        .page-title p {
            font-size: 10px;
        }

        .back-btn span {
            display: none;
        }

        .back-btn {
            width: 38px;
            height: 38px;

            padding: 0;

            justify-content: center;
        }

        .account-hero {
            align-items: flex-start;
            flex-direction: column;

            padding: 18px;
        }

        .account-hero-right {
            width: 100%;
        }

        .mini-stat {
            flex: 1;
        }

        .section-header {
            padding: 17px;
        }

        .section-body {
            padding: 17px;
        }

        .form-grid,
        .password-grid {
            grid-template-columns: 1fr;
        }

        .password-grid .form-group:first-child {
            grid-column: auto;
        }

        .form-group.full {
            grid-column: auto;
        }

        .setting-list,
        .danger-content {
            padding-left: 17px;
            padding-right: 17px;
        }

        .setting-row,
        .danger-row {
            align-items: flex-start;
        }

        .setting-info p,
        .danger-info p {
            max-width: 100%;
        }

        .select {
            min-width: 125px;
        }

        .ai-banner {
            margin-left: 17px;
            margin-right: 17px;
        }
    }

    @media (max-width: 480px) {

        .page {
            padding: 13px;
        }

        .topbar {
            margin-bottom: 18px;
        }

        .topbar-left {
            gap: 10px;
        }

        .title-icon {
            width: 40px;
            height: 40px;
        }

        .page-title h1 {
            font-size: 18px;
        }

        .account-user {
            width: 100%;
        }

        .profile-avatar {
            width: 54px;
            height: 54px;
        }

        .account-hero-right {
            gap: 7px;
        }

        .mini-stat {
            min-width: 0;
            padding: 9px;
        }

        .profile-preview {
            align-items: flex-start;
        }

        .profile-preview-left {
            align-items: flex-start;
        }

        .profile-badge {
            display: none;
        }

        .setting-row,
        .danger-row {
            flex-direction: column;
            align-items: stretch;
            gap: 11px;
        }

        .setting-control {
            align-self: flex-end;
        }

        .select {
            width: 100%;
        }

        .danger-btn {
            width: 100%;
        }

        .save-btn {
            width: 100%;
            justify-content: center;
        }
    }
    </style>
</head>

<body>

    <div class="page">

        <div class="container">

            {{-- =========================================
                 HEADER
            ========================================== --}}

            <header class="topbar">

                <div class="topbar-left">

                    <div class="title-icon">
                        <i data-lucide="settings"></i>
                    </div>

                    <div class="page-title">

                        <h1>
                            Pengaturan
                        </h1>

                        <p>
                            Kelola akun dan pengalaman SkillCareerAI kamu.
                        </p>

                    </div>

                </div>

                <a href="{{ route('dashboard') }}" class="back-btn">

                    <i data-lucide="arrow-left" size="15"></i>

                    <span>
                        Kembali ke Dashboard
                    </span>

                </a>

            </header>


            {{-- =========================================
                 ACCOUNT HERO
            ========================================== --}}

            <section class="account-hero">

                <div class="account-user">

                    <div class="profile-avatar">

                        @if(auth()->user()->profile_photo)
                        <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Foto profil">
                        @else
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                        @endif

                    </div>

                    <div class="account-info">

                        <h2>
                            {{ auth()->user()->name ?? 'User' }}
                        </h2>

                        <p>
                            {{ auth()->user()->email ?? 'user@email.com' }}
                        </p>

                        <div class="account-status">

                            <span class="status-dot"></span>

                            Akun Aktif

                        </div>

                    </div>

                </div>

                <div class="account-hero-right">

                    <div class="mini-stat">

                        <span>
                            Status
                        </span>

                        <strong>
                            Aktif
                        </strong>

                    </div>

                    <div class="mini-stat">

                        <span>
                            Platform
                        </span>

                        <strong>
                            SkillCareerAI
                        </strong>

                    </div>

                </div>

            </section>


            {{-- =========================================
                 ALERT
            ========================================== --}}

            @if(session('success'))

            <div class="alert alert-success">

                <i data-lucide="check-circle" size="15"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

            @endif


            @if($errors->any())

            <div class="alert alert-error">

                <i data-lucide="circle-alert" size="15"></i>

                <span>
                    {{ $errors->first() }}
                </span>

            </div>

            @endif


            {{-- =========================================
                 MAIN SETTINGS
            ========================================== --}}

            <div class="settings-layout">


                {{-- =====================================
                     SIDEBAR
                ====================================== --}}

                <aside class="settings-nav">

                    <div class="nav-heading">
                        Pengaturan
                    </div>

                    <button type="button" class="nav-item active" onclick="scrollToSection('akun', this)">

                        <i data-lucide="user"></i>

                        Akun Saya

                    </button>


                    <button type="button" class="nav-item" onclick="scrollToSection('password', this)">

                        <i data-lucide="shield-check"></i>

                        Keamanan

                    </button>


                    <button type="button" class="nav-item" onclick="scrollToSection('preferensi', this)">

                        <i data-lucide="sliders-horizontal"></i>

                        Preferensi

                    </button>


                    <button type="button" class="nav-item" onclick="scrollToSection('ai', this)">

                        <i data-lucide="sparkles"></i>

                        AI Mentor

                    </button>


                    <div class="nav-divider"></div>


                    <button type="button" class="nav-item logout" onclick="logoutUser()">

                        <i data-lucide="log-out"></i>

                        Logout

                    </button>

                </aside>


                {{-- =====================================
                     CONTENT
                ====================================== --}}

                <main class="settings-content">


                    {{-- =================================
                         AKUN
                    ================================== --}}

                    <section class="settings-section" id="akun">

                        <div class="section-header">

                            <div class="section-icon">

                                <i data-lucide="user-round"></i>

                            </div>

                            <div>

                                <h2>
                                    Informasi Akun
                                </h2>

                                <p>
                                    Perbarui informasi dasar akun dan foto profil kamu.
                                </p>

                            </div>

                        </div>


                        <div class="section-body">


                            {{-- PROFILE PREVIEW --}}

                            <div class="profile-preview">

                                <div class="profile-preview-left">

                                    <div class="photo-area">

                                        <div class="preview-avatar" id="profilePreview">

                                            @if(auth()->user()->profile_photo)

                                            <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                                                alt="Foto profil">

                                            @else

                                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}

                                            @endif

                                        </div>


                                        <label for="profile_photo" class="change-photo-btn" title="Ganti foto profil">

                                            <i data-lucide="camera"></i>

                                        </label>

                                    </div>


                                    <div class="preview-info">

                                        <h3>
                                            {{ auth()->user()->name ?? 'User' }}
                                        </h3>

                                        <p>
                                            {{ auth()->user()->email ?? 'user@email.com' }}
                                        </p>

                                        <div class="photo-helper">
                                            JPG, JPEG, atau PNG · Maksimal 2 MB
                                        </div>

                                    </div>

                                </div>


                                <div class="profile-badge">

                                    <i data-lucide="badge-check" size="12"></i>

                                    Member

                                </div>

                            </div>


                            {{-- PROFILE FORM --}}

                            <form method="POST" action="{{ url('/settings/profile') }}" enctype="multipart/form-data"
                                id="profileForm">

                                @csrf

                                @method('PUT')


                                {{-- PHOTO INPUT --}}

                                <input type="file" name="profile_photo" id="profile_photo" class="photo-input"
                                    accept="image/png,image/jpeg,image/jpg">


                                <div class="form-grid">


                                    {{-- NAME --}}

                                    <div class="form-group">

                                        <label>
                                            Nama Lengkap
                                        </label>

                                        <div class="input-wrapper">

                                            <i data-lucide="user" class="input-icon"></i>

                                            <input type="text" name="name" class="input"
                                                value="{{ auth()->user()->name ?? '' }}"
                                                placeholder="Masukkan nama lengkap" required>

                                        </div>

                                    </div>


                                    {{-- EMAIL --}}

                                    <div class="form-group">

                                        <label>
                                            Email
                                        </label>

                                        <div class="input-wrapper">

                                            <i data-lucide="mail" class="input-icon"></i>

                                            <input type="email" name="email" class="input"
                                                value="{{ auth()->user()->email ?? '' }}" placeholder="Masukkan email"
                                                required>

                                        </div>

                                    </div>


                                </div>


                                <div class="save-area">

                                    <button type="submit" class="save-btn">

                                        <i data-lucide="save" size="14"></i>

                                        Simpan Perubahan

                                    </button>

                                </div>

                            </form>

                        </div>

                    </section>


                    {{-- =================================
                         PASSWORD
                    ================================== --}}

                    <section class="settings-section" id="password">

                        <div class="section-header">

                            <div class="section-icon">

                                <i data-lucide="shield-check"></i>

                            </div>

                            <div>

                                <h2>
                                    Keamanan Akun
                                </h2>

                                <p>
                                    Kelola password untuk menjaga akun tetap aman.
                                </p>

                            </div>

                        </div>


                        <div class="section-body">


                            <div class="security-note">

                                <i data-lucide="info"></i>

                                <span>
                                    Gunakan password yang kuat dan jangan membagikannya
                                    kepada orang lain.
                                </span>

                            </div>


                            <form method="POST" action="{{ url('/settings/password') }}">

                                @csrf

                                @method('PUT')


                                <div class="password-grid">


                                    {{-- CURRENT PASSWORD --}}

                                    <div class="form-group">

                                        <label>
                                            Password Saat Ini
                                        </label>

                                        <div class="input-wrapper">

                                            <i data-lucide="lock" class="input-icon"></i>

                                            <input type="password" name="current_password" class="input"
                                                placeholder="Masukkan password lama" required>

                                        </div>

                                    </div>


                                    {{-- NEW PASSWORD --}}

                                    <div class="form-group">

                                        <label>
                                            Password Baru
                                        </label>

                                        <div class="input-wrapper">

                                            <i data-lucide="key-round" class="input-icon"></i>

                                            <input type="password" name="password" class="input"
                                                placeholder="Minimal 8 karakter" required>

                                        </div>

                                    </div>


                                    {{-- CONFIRM PASSWORD --}}

                                    <div class="form-group">

                                        <label>
                                            Konfirmasi Password
                                        </label>

                                        <div class="input-wrapper">

                                            <i data-lucide="shield" class="input-icon"></i>

                                            <input type="password" name="password_confirmation" class="input"
                                                placeholder="Ulangi password baru" required>

                                        </div>

                                    </div>


                                </div>


                                <div class="save-area">

                                    <button type="submit" class="save-btn">

                                        <i data-lucide="key-round" size="14"></i>

                                        Update Password

                                    </button>

                                </div>

                            </form>

                        </div>

                    </section>


                    {{-- =================================
                         PREFERENSI
                    ================================== --}}

                    <section class="settings-section" id="preferensi">

                        <div class="section-header">

                            <div class="section-icon">

                                <i data-lucide="sliders-horizontal"></i>

                            </div>

                            <div>

                                <h2>
                                    Preferensi
                                </h2>

                                <p>
                                    Sesuaikan tampilan dan pengalaman aplikasi.
                                </p>

                            </div>

                        </div>


                        <div class="setting-list">


                            {{-- DARK MODE --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Mode Gelap
                                    </h3>

                                    <p>
                                        Gunakan tampilan gelap agar lebih nyaman
                                        saat belajar pada malam hari.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <label class="toggle">

                                        <input type="checkbox" id="darkMode">

                                        <span class="slider"></span>

                                    </label>

                                </div>

                            </div>


                            {{-- NOTIFICATION --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Notifikasi
                                    </h3>

                                    <p>
                                        Terima pengingat belajar dan informasi
                                        penting dari SkillCareerAI.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <label class="toggle">

                                        <input type="checkbox" id="notifications" checked>

                                        <span class="slider"></span>

                                    </label>

                                </div>

                            </div>


                            {{-- LANGUAGE --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Bahasa
                                    </h3>

                                    <p>
                                        Pilih bahasa yang digunakan pada aplikasi.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <select class="select" id="language">

                                        <option value="id">
                                            Bahasa Indonesia
                                        </option>

                                        <option value="en">
                                            English
                                        </option>

                                    </select>

                                </div>

                            </div>


                        </div>

                    </section>


                    {{-- =================================
                         AI MENTOR
                    ================================== --}}

                    <section class="settings-section" id="ai">

                        <div class="section-header">

                            <div class="section-icon">

                                <i data-lucide="sparkles"></i>

                            </div>

                            <div>

                                <h2>
                                    AI Mentor
                                </h2>

                                <p>
                                    Sesuaikan cara AI Mentor membantu kamu.
                                </p>

                            </div>

                        </div>


                        <div class="ai-banner">

                            <div class="ai-banner-icon">

                                <i data-lucide="sparkles"></i>

                            </div>

                            <div class="ai-banner-text">

                                <strong>
                                    Pengalaman AI yang lebih personal
                                </strong>

                                <span>
                                    Atur gaya dan cara AI memberikan bantuan belajar.
                                </span>

                            </div>

                        </div>


                        <div class="setting-list">


                            {{-- AI VOICE --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Suara AI Mentor
                                    </h3>

                                    <p>
                                        AI akan membacakan respons menggunakan
                                        fitur Text-to-Speech.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <label class="toggle">

                                        <input type="checkbox" id="aiVoice" checked>

                                        <span class="slider"></span>

                                    </label>

                                </div>

                            </div>


                            {{-- PERSONALIZATION --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Respons Personal
                                    </h3>

                                    <p>
                                        Izinkan AI memberikan saran yang lebih
                                        sesuai dengan aktivitas belajar kamu.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <label class="toggle">

                                        <input type="checkbox" id="aiPersonal" checked>

                                        <span class="slider"></span>

                                    </label>

                                </div>

                            </div>


                            {{-- AI STYLE --}}

                            <div class="setting-row">

                                <div class="setting-info">

                                    <h3>
                                        Gaya Respons AI
                                    </h3>

                                    <p>
                                        Pilih gaya jawaban yang paling sesuai
                                        dengan cara belajar kamu.
                                    </p>

                                </div>

                                <div class="setting-control">

                                    <select class="select" id="aiStyle">

                                        <option value="friendly">
                                            Santai & Friendly
                                        </option>

                                        <option value="professional">
                                            Profesional
                                        </option>

                                        <option value="simple">
                                            Singkat & Sederhana
                                        </option>

                                    </select>

                                </div>

                            </div>


                        </div>

                    </section>


                    {{-- =================================
                         DANGER ZONE
                    ================================== --}}

                    <section class="settings-section danger-section">

                        <div class="section-header">

                            <div class="section-icon">

                                <i data-lucide="triangle-alert"></i>

                            </div>

                            <div>

                                <h2>
                                    Zona Berbahaya
                                </h2>

                                <p>
                                    Tindakan berikut membutuhkan perhatian.
                                </p>

                            </div>

                        </div>


                        <div class="danger-content">


                            {{-- LOGOUT --}}

                            <div class="danger-row">

                                <div class="danger-info">

                                    <h3>
                                        Keluar dari akun
                                    </h3>

                                    <p>
                                        Kamu akan keluar dari SkillCareerAI
                                        dan diarahkan kembali ke halaman login.
                                    </p>

                                </div>

                                <button type="button" class="danger-btn" onclick="logoutUser()">

                                    <i data-lucide="log-out" size="13"></i>

                                    Logout

                                </button>

                            </div>


                            {{-- DELETE ACCOUNT --}}

                            <div class="danger-row">

                                <div class="danger-info">

                                    <h3>
                                        Hapus akun
                                    </h3>

                                    <p>
                                        Menghapus akun merupakan tindakan permanen.
                                        Pastikan kamu benar-benar ingin melakukannya.
                                    </p>

                                </div>

                                <button type="button" class="danger-btn" onclick="deleteAccount()">

                                    <i data-lucide="trash-2" size="13"></i>

                                    Hapus Akun

                                </button>

                            </div>


                        </div>

                    </section>


                </main>

            </div>


            {{-- FOOTER --}}

            <div class="settings-footer">

                <strong>
                    SkillCareerAI
                </strong>

                <span>
                    ·
                </span>

                Pengaturan akun & pengalaman belajar

            </div>

        </div>

    </div>


    {{-- =========================================
         LOGOUT FORM
    ========================================== --}}

    <form id="logoutForm" method="POST" action="{{ route('logout') }}" style="display:none;">

        @csrf

    </form>


    {{-- =========================================
         DELETE FORM
    ========================================== --}}

    <form id="deleteForm" method="POST" action="{{ url('/settings/account') }}" style="display:none;">

        @csrf

        @method('DELETE')

    </form>


    <script>
    /* =========================================
           LUCIDE
        ========================================== */

    lucide.createIcons();


    /* =========================================
       PROFILE PHOTO PREVIEW
    ========================================== */

    const profileInput =
        document.getElementById("profile_photo");

    const profilePreview =
        document.getElementById("profilePreview");


    if (profileInput && profilePreview) {

        profileInput.addEventListener(
            "change",
            function() {

                const file = this.files[0];

                if (!file) return;


                /* CHECK TYPE */

                const allowedTypes = [
                    "image/jpeg",
                    "image/jpg",
                    "image/png"
                ];

                if (!allowedTypes.includes(file.type)) {

                    alert(
                        "Format foto harus JPG, JPEG, atau PNG."
                    );

                    this.value = "";

                    return;
                }


                /* CHECK SIZE */

                if (file.size > 2 * 1024 * 1024) {

                    alert(
                        "Ukuran foto maksimal 2 MB."
                    );

                    this.value = "";

                    return;
                }


                /* PREVIEW */

                const reader = new FileReader();

                reader.onload = function(event) {

                    profilePreview.innerHTML = `
                            <img
                                src="${event.target.result}"
                                alt="Preview foto profil"
                            >
                        `;

                };

                reader.readAsDataURL(file);

            }
        );

    }


    /* =========================================
       NAVIGATION
    ========================================== */

    function scrollToSection(id, element) {

        const target =
            document.getElementById(id);

        if (!target) return;


        document
            .querySelectorAll(".nav-item")
            .forEach(item => {

                item.classList.remove("active");

            });


        element.classList.add("active");


        target.scrollIntoView({

            behavior: "smooth",

            block: "start"

        });

    }


    /* =========================================
       ACTIVE SECTION ON SCROLL
    ========================================== */

    const sections =
        document.querySelectorAll(
            ".settings-section[id]"
        );

    const navItems =
        document.querySelectorAll(
            ".settings-nav .nav-item:not(.logout)"
        );


    const observer =
        new IntersectionObserver(

            entries => {

                entries.forEach(entry => {

                    if (!entry.isIntersecting)
                        return;


                    const id =
                        entry.target.id;


                    navItems.forEach(item => {

                        const onclickValue =
                            item.getAttribute("onclick") || "";


                        item.classList.toggle(

                            "active",

                            onclickValue.includes(
                                "'" + id + "'"
                            )

                        );

                    });

                });

            },

            {
                rootMargin: "-20% 0px -65% 0px",

                threshold: 0
            }

        );


    sections.forEach(section => {

        observer.observe(section);

    });


    /* =========================================
       LOGOUT
    ========================================== */

    function logoutUser() {

        const confirmLogout =
            confirm(
                "Apakah kamu yakin ingin logout dari SkillCareerAI?"
            );


        if (!confirmLogout)
            return;


        document
            .getElementById("logoutForm")
            .submit();

    }


    /* =========================================
       DELETE ACCOUNT
    ========================================== */

    function deleteAccount() {

        const firstConfirm =
            confirm(

                "PERINGATAN!\n\n" +

                "Menghapus akun merupakan tindakan permanen.\n" +

                "Data akun kamu dapat hilang.\n\n" +

                "Apakah kamu benar-benar yakin?"

            );


        if (!firstConfirm)
            return;


        const secondConfirm =
            confirm(

                "Konfirmasi terakhir.\n\n" +

                "Klik OK hanya jika kamu benar-benar ingin menghapus akun."

            );


        if (!secondConfirm)
            return;


        document
            .getElementById("deleteForm")
            .submit();

    }


    /* =========================================
       DARK MODE
    ========================================== */

    const darkMode =
        document.getElementById("darkMode");


    const savedTheme =
        localStorage.getItem(
            "skillcareerai_theme"
        );


    if (savedTheme === "dark") {

        document.body.classList.add("dark");

        darkMode.checked = true;

    }


    darkMode.addEventListener(
        "change",
        function() {

            if (this.checked) {

                document.body.classList.add("dark");

                localStorage.setItem(
                    "skillcareerai_theme",
                    "dark"
                );

            } else {

                document.body.classList.remove("dark");

                localStorage.setItem(
                    "skillcareerai_theme",
                    "light"
                );

            }

        }
    );


    /* =========================================
       NOTIFICATION
    ========================================== */

    const notifications =
        document.getElementById("notifications");


    const savedNotification =
        localStorage.getItem(
            "skillcareerai_notifications"
        );


    if (savedNotification === "off") {

        notifications.checked = false;

    }


    notifications.addEventListener(
        "change",
        function() {

            localStorage.setItem(

                "skillcareerai_notifications",

                this.checked ?
                "on" :
                "off"

            );

        }
    );


    /* =========================================
       LANGUAGE
    ========================================== */

    const language =
        document.getElementById("language");


    const savedLanguage =
        localStorage.getItem(
            "skillcareerai_language"
        );


    if (savedLanguage) {

        language.value =
            savedLanguage;

    }


    language.addEventListener(
        "change",
        function() {

            localStorage.setItem(

                "skillcareerai_language",

                this.value

            );

        }
    );


    /* =========================================
       AI VOICE
    ========================================== */

    const aiVoice =
        document.getElementById("aiVoice");


    const savedVoice =
        localStorage.getItem(
            "skillcareerai_voice"
        );


    if (savedVoice === "off") {

        aiVoice.checked = false;

    }


    aiVoice.addEventListener(
        "change",
        function() {

            localStorage.setItem(

                "skillcareerai_voice",

                this.checked ?
                "on" :
                "off"

            );

        }
    );


    /* =========================================
       AI PERSONALIZATION
    ========================================== */

    const aiPersonal =
        document.getElementById("aiPersonal");


    const savedPersonal =
        localStorage.getItem(
            "skillcareerai_personalization"
        );


    if (savedPersonal === "off") {

        aiPersonal.checked = false;

    }


    aiPersonal.addEventListener(
        "change",
        function() {

            localStorage.setItem(

                "skillcareerai_personalization",

                this.checked ?
                "on" :
                "off"

            );

        }
    );


    /* =========================================
       AI STYLE
    ========================================== */

    const aiStyle =
        document.getElementById("aiStyle");


    const savedAIStyle =
        localStorage.getItem(
            "skillcareerai_ai_style"
        );


    if (savedAIStyle) {

        aiStyle.value =
            savedAIStyle;

    }


    aiStyle.addEventListener(
        "change",
        function() {

            localStorage.setItem(

                "skillcareerai_ai_style",

                this.value

            );

        }
    );
    </script>

</body>

</html>